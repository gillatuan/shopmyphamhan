<?php

class SiteController extends FrontendController
{
    public $includeText = ' với mong muốn luôn làm hài lòng quý khách khi đến với chúng tôi. Hãy gọi ngay: 09.777.5.7.9.11';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        $this->redirect(array('/Shop/product/index'));
        /*// seo
        $this->breadcrumbs = array(
            ''
        );
        $pageTitle = $this->pageTitle = 'Web3in1.com - Trang chủ';
        $seo = array(
            'keywords' => Yii::app()->language == 'vi' ? 'trang chủ, trang chủ thiết kế web, trang chủ web3in.com' : 'homepage, homepage design web, homepage web3in1.com',
            'description' => Yii::app()->language == 'vi' ? 'trang chủ, trang chủ thiết kế web, trang chủ web3in.com' : 'homepage, homepage design web, homepage web3in1.com',
            'title' => $pageTitle,
            'type' => 'Blog',
            'url' => Yii::app()->createAbsoluteUrl('/site/index'),
            'image' => '',
            'site_name' => $pageTitle,
        );
        Helper::seo($seo);

		$this->render('index');*/
	}

    public function actionRegister($type = 3) {
        if (Helper::user()->id) {
            $this->redirect(Yii::app()->homeUrl);
        }

        $user = new User;
        $user->setScenario('register');

        if (Yii::app()->request->IsPostRequest) {
            // validate
            Helper::performAjaxValidation($user, 'user-profile-form');

            // assign data
            $postUser = Helper::post('User');
            $validateCode = Helper::randomString('all');
            $model = User::model()->assignValue($user, $postUser, $validateCode);

            if ($model->save()) {
                Helper::setFlash('SUCCESS_REGISTER', Helper::t('SUCCESS_REGISTER'));

                // send mail
                    // data
                    $url = Yii::app()->createAbsoluteUrl('/site/confirm', array('code' => $validateCode));
                    $params = array(
                        'viewPath' => 'application.views.site.mail',
                        'view' => 'registration_confirmation',
                        'subject' => 'Web3in1.com - ' . Helper::t('TEXT_NOTIFICATION_CONFIRM_SUCCESS_REGISTRATION'),
                        'body' => array(
                            'username' => $model->username,
                            'password' => $postUser['password'],
                            'link' => CHtml::link($url, $url, array('target' => '_blank')),
                        ),
                        'mailTo' => $model->email,
                        'mailFrom' => array(ADMIN_EMAIL => 'Web3in1.com - ' . ADMIN_EMAIL)
                    );
                    // send
                    Helper::sendMail($params);

                $this->redirect(array('/site/login'));
            } else {
                throw new CHttpException(400, Helper::t('ERROR_ACTION_CODE'));
            }
        }

        // seo
        $this->breadcrumbs = array(
            ' Đăng ký tài khoản'
        );
        $pageTitle = $this->pageTitle = 'Web3in1.com - Đăng ký tài khoản';
        $seo = array(
            'keywords' => Yii::app()->language == 'vi' ? 'Đăng ký tài khoản, Đăng ký tài khoản thiết kế web, Đăng ký tài khoản web3in.com' : 'Register page, register page design web, homepage web3in1.com',
            'description' => Yii::app()->language == 'vi' ? 'Đăng ký tài khoản, Đăng ký tài khoản thiết kế web, Đăng ký tài khoản web3in.com' : 'Register page, register page design web, homepage web3in1.com',
            'title' => $pageTitle,
            'type' => 'Blog',
            'url' => Yii::app()->createAbsoluteUrl('/site/register'),
            'image' => '',
            'site_name' => $pageTitle,
        );
        Helper::seo($seo);

        $this->render('signup', array('model' => $user));
    }

    public function actionConfirm($code) {
        $this->layout = false;

        if ($code == '') {
            $this->redirect(array('/site/contact'));
        } else {
            $findUser = User::model()->updateAttrByAttr(array('validation_code' => $code), array(
                'validation_code' => '',
                'validation_expired' => '',
                'status' => APPROVED
            ));
            Helper::setFlash('SUCCESS_REGISTER_WELCOME', Helper::t('SUCCESS_REGISTER_WELCOME'));

            // send mail
                // data
                $params = array(
                    'viewPath' => 'application.views.site.mail',
                    'view' => 'welcome',
                    'subject' => 'Web3in1.com - ' . Helper::t('TEXT_NOTIFICATION_SUCCESS_WELCOME'),
                    'body' => array(
                        'username' => $findUser->username,
                    ),
                    'mailTo' => $findUser->email,
                    'mailFrom' => array(ADMIN_EMAIL => 'Web3in1.com - Welcome')
                );
                // send
                Helper::sendMail($params);

            $this->redirect(array('/site/login'));
        }
    }

    /**
     * Displays the contact page

     */
    public function actionContact()
    {
        $model = new ContactForm;
        // if it is ajax validation request
        Helper::performAjaxValidation($model, 'contact-form');
        if (Helper::post('ContactForm')) {
            $model->attributes = Helper::post('ContactForm');
            if ($model->validate()) {
                // send mail
                    // data
                    $params = array(
                        'viewPath' => 'application.views.site.mail',
                        'view' => 'send_contact',
                        'subject' => $model->subject,
                        'body' => array(
                            'name'    => $model->name,
                            'title'   => $model->subject,
                            'comment' => nl2br($model->body)
                        ),
                        'mailTo' => ADMIN_EMAIL,
                        'mailFrom' => array($model->email => 'Contact - ' . $model->email)
                    );
                    // send
                    Helper::sendMail($params);

                Helper::setFlash('SUCCESS_CONTACT', Helper::t('SUCCESS_CONTACT'));
                $this->redirect(array('/site/contact'));
            }
        }

        // seo
        $this->breadcrumbs = array(
            ' Liên hệ'
        );
        $pageTitle = $this->pageTitle = 'Web3in1.com - Liên hệ';
        $seo = array(
            'keywords'    => Yii::app()->language == 'vi' ? 'liên hệ, liên hệ thiết kế web, liên hệ web3in.com' : 'contact, contact to design web, contact to web3in1.com',
            'description' => Yii::app()->language == 'vi' ? 'liên hệ, liên hệ thiết kế web, liên hệ web3in.com' : 'contact, contact to design web, contact to web3in1.com',
            'title' => $pageTitle,
            'type' => 'Blog',
            'url' => Yii::app()->createAbsoluteUrl('/site/contact'),
            'image' => '',
            'site_name' => $pageTitle,
        );
        Helper::seo($seo);

        $this->render('contact', array('model' => $model));
    }

    public function actionSendToFriend() {
        if (Yii::app()->request->isPostRequest) {
            $criteria = new CDbCriteria();
            $criteria->compare('status', APPROVED);
            $criteria->compare('is_popular', true);
            $products = Cache::model()->usingCache('Products', $criteria, '', false, Cache_Time, 15);

            // send mail
            // data
            $params = array(
                'viewPath' => 'application.views.site.mail',
                'view' => 'send-mail-to-friend',
                'subject' => 'Web3in1.com - ' . Helper::t('TEXT_NOTIFICATION_SUCCESS_SEND_MAIL_TO_FRIENDS'),
                'body' => array(
                    'products' => $products
                ),
                'mailTo' => Helper::post('send-mail-to-friend'),
                'mailFrom' => array(ADMIN_EMAIL => 'Web3in1.com - Thiết kế website')
            );
            // send
            Helper::sendMail($params);

            Helper::setFlash('send-mail', Helper::t('TEXT_NOTIFICATION_SUCCESS_SEND_MAIL_TO_FRIENDS_THANK_YOU'));

            $this->redirect(array('/site/index'));
        }
    }

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
	if (Helper::user()->id) {
            $this->redirect(Yii::app()->homeUrl);
        }
        $model = new User;
        $model->setScenario('login');
        // if it is ajax validation request
        Helper::performAjaxValidation($model);
        // collect user input data
        if (Helper::post('User')) {
            $model->attributes = Helper::post('User');
            // validate user input and redirect to the previous page if valid
            if ($model->login()) {
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }

        // seo
        $this->breadcrumbs = array(
            ' Đăng nhập'
        );
        $pageTitle = $this->pageTitle = 'Web3in1.com - Đăng nhập';
        $seo = array(
            'keywords'    => Yii::app()->language == 'vi' ? 'đăng nhập, đăng nhập thiết kế web, đăng nhập web3in.com' : 'login, login to design web, login to web3in1.com',
            'description' => Yii::app()->language == 'vi' ? 'đăng nhập, đăng nhập thiết kế web, đăng nhập web3in.com' : 'login, login to design web, login to web3in1.com',
            'title' => $pageTitle,
            'type' => 'Blog',
            'url' => Yii::app()->createAbsoluteUrl('/site/login'),
            'image' => '',
            'site_name' => $pageTitle,
        );
        Helper::seo($seo);

		// display the login form
		$this->render('login',array('model'=>$model));
	}

    public function actionForgot()
    {
        if (Helper::user()->id) {
            $this->redirect(Yii::app()->homeUrl);
        }
        $model = new User;
        $model->setScenario('forgot');

        // collect user input data
        if (Yii::app()->request->isPostRequest) {
            // if it is ajax validation request
            Helper::performAjaxValidation($model, 'forgot-form');

            $resetCode = Helper::randomString('lower');
            $validateExpired = time() + 24 * 60 * 60;
            $postUser = Helper::post('User');

            $updateModel = $model->updateAttrByAttr(array('email' => $postUser['email']), array(
                'validation_code' => $resetCode,
                'validation_expired' => $validateExpired));
            if ($updateModel) {
                // send mail
                    // data
                    $urlResetConfirm = Yii::app()->createAbsoluteUrl('/site/resetConfirm', array('code' => $resetCode));
                    $params = array(
                        'viewPath' => 'application.views.site.mail',
                        'view' => 'password_reset_confirmation',
                        'subject' => 'Web3in1.com - ' . Helper::t('TEXT_NOTIFICATION_RESET_PASSWORD'),
                        'body' => array(
                            'username' => ucfirst($updateModel->username),
                            'link'     => CHtml::link($urlResetConfirm, $urlResetConfirm, array('target' => '_blank')),
                            'url'      => $urlResetConfirm,
                            'code'     => $resetCode,
                        ),
                        'mailTo' => $updateModel->email,
                        'mailFrom' => array(ADMIN_EMAIL => 'Web3in1.com - ' . ADMIN_EMAIL)
                    );
                    // send
                    Helper::sendMail($params);

                Helper::setFlash('SUCCESS_SEND_CODE_TO_CHANGE_PASSWORD', Helper::t('SUCCESS_SEND_CODE_TO_CHANGE_PASSWORD'));
            }
        }

        // seo
        $this->breadcrumbs = array(
            ' Quên mật khẩu'
        );
        $pageTitle = $this->pageTitle = 'Web3in1.com - Quên mật khẩu';
        $seo = array(
            'keywords'    => Yii::app()->language == 'vi' ? 'Quên mật khẩu, Quên mật khẩu thiết kế web, Quên mật khẩu web3in.com' : 'forgot, forgot to design web, forgot to web3in1.com',
            'description' => Yii::app()->language == 'vi' ? 'Quên mật khẩu, Quên mật khẩu thiết kế web, Quên mật khẩu web3in.com' : 'forgot, forgot to design web, forgot to web3in1.com',
            'title' => $pageTitle,
            'type' => 'Blog',
            'url' => Yii::app()->createAbsoluteUrl('/site/forgot'),
            'image' => '',
            'site_name' => $pageTitle,
        );
        Helper::seo($seo);

        $this->render('forgot', array(
            'model' => $model
        ));
    }

    public function actionResetConfirm($code) {
        $this->layout = false;

        if ($code == '') {
            $this->redirect(array('/site/contact'));
        } else {
            $findUser = User::model()->findByAttributes(array('validation_code' => $code));
            if (!$findUser) {
                throw new CHttpException(400, Helper::t('INVALID_CODE'));
            } else {
                Yii::app()->session['code'] = $code;
                Yii::app()->session['expired_time'] = $findUser->validation_expired;
                $this->redirect(array('/site/changePassword'));
            }
        }
    }

    public function actionChangePassword() {
        $findUser = '';
        if (!Yii::app()->session['code']) {
            throw new CHttpException(400, Helper::t('INVALID_CODE'));
        } elseif (Yii::app()->session['expired_time'] < time()) {
            Helper::setFlash('EXPIRED_SEND_CODE_TO_CHANGE_PASSWORD', Helper::t('EXPIRED_SEND_CODE_TO_CHANGE_PASSWORD'));
            $this->redirect(array('/site/forgot'));
        }

        $findUser = User::model()->findModelByAttr(array('validation_code' => Yii::app()->session['code']));
        $findUser->setScenario('changePassword_frontend');

        if (Yii::app()->request->isPostRequest) {
            // validate
            Helper::performAjaxValidation($findUser, 'user-changePassword-form');

            // send mail
                // data
                $params = array(
                    'viewPath' => 'application.views.site.mail',
                    'view' => 'success_change_password',
                    'subject' => 'Web3in1.com - ' . Helper::t('TEXT_NOTIFICATION_SUCCESS_CHANGE_PASSWORD'),
                    'body' => array(
                        'username' => $findUser->username
                    ),
                    'mailTo' => $findUser->email,
                    'mailFrom' => array(ADMIN_EMAIL => 'Web3in1.com - ' . ADMIN_EMAIL)
                );
                // send
                Helper::sendMail($params);

            // destroy session
            unset(Yii::app()->session['code']);
            unset(Yii::app()->session['expired_time']);

            // update user information
            $postUser = Helper::post('User');
            $passwordNew = $postUser['passwordNew']; 
            User::model()->updateAttrByAttr(array('email' => $findUser->email), array(
                'validation_code' => '',
                'validation_expired' => '',
                'password' => md5($passwordNew)
            ));
            Helper::setFlash('successChangePassword', Helper::t('successChangePassword'));

            $this->redirect(array('/site/login'));
        }

        // seo
        $this->breadcrumbs = array(
            ' Thay đổi mật khẩu'
        );
        $pageTitle = $this->pageTitle = 'Web3in1.com - Thay đổi mật khẩu';
        $seo = array(
            'keywords' => Yii::app()->language == 'vi' ? 'Thay đổi mật khẩu, Thay đổi mật khẩu thiết kế web, Thay đổi mật khẩu web3in.com' : 'forgot, forgot to design web, forgot to web3in1.com',
            'description' => Yii::app()->language == 'vi' ? 'Thay đổi mật khẩu, Thay đổi mật khẩu thiết kế web, Thay đổi mật khẩu web3in.com' : 'forgot, forgot to design web, forgot to web3in1.com',
            'title' => $pageTitle,
            'type' => 'Blog',
            'url' => Yii::app()->createAbsoluteUrl('/site/changePassword'),
            'image' => '',
            'site_name' => $pageTitle,
        );
        Helper::seo($seo);

        $this->render('changePassword', array('model' => $findUser));
    }

    /**
   	 * This is the action to handle external exceptions.
   	 */
   	public function actionError()
   	{
        // seo
        $this->breadcrumbs = array(
            ' Error'
        );
        $pageTitle = $this->pageTitle = 'Web3in1.com - Xuất hiện lỗi';
        $seo = array(
            'keywords' => Yii::app()->language == 'vi' ? 'trang thông báo lỗi, trang thông báo lỗi thiết kế web, trang thông báo lỗi web3in.com' : 'errorpage, homepage design web, errorpage homepage web3in1.com',
            'description' => Yii::app()->language == 'vi' ? 'trang thông báo lỗi, trang thông báo lỗi thiết kế web, trang thông báo lỗi web3in.com' : 'errorpage, homepage design web, errorpage homepage web3in1.com',
            'title' => $pageTitle,
            'type' => 'Blog',
            'url' => Yii::app()->createAbsoluteUrl('/site/error'),
            'image' => '',
            'site_name' => $pageTitle,
        );
        Helper::seo($seo);

   		if($error=Yii::app()->errorHandler->error)
   		{
   			if(Yii::app()->request->isAjaxRequest)
   				echo $error['message'];
   			else
   				$this->render('error', $error);
   		}
   	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
        User::model()->updateByPk(Helper::user()->id, array(
            'last_login' => '',
            'is_online' => Offline
        ));
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}