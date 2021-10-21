<?php
namespace LoginRadius\Ciam\Model\Helper;
class Constant extends  \Magento\Framework\App\Helper\AbstractHelper{
    const SOCIAL_LOGIN_MSG  = 'Verification link has been sent to your email address.';
    const LOGIN_BY_EMAIL_MSG  =  'Passwordless login link has been sent to your provided email address, check email for further instruction.';
    const LOGIN_BY_PHONE_MSG  =  'OTP has been sent to your phone number.';

    const REGISTRATION_OTP_VERIFICATION_MSG  =  'OTP has been sent to your email address.';
    const REGISTRATION_OTP_MSG  =  'OTP has been sent to your phone number.';
    const REGISTRATION_SUCCESS_MSG  =  'A verification email has been sent to your provided email address, please check your email for further instructions.';

    const FORGOT_PASSWORD_MSG  =  'Password reset information sent to your provided email address, check email for further instruction.';
    const FORGOT_PASSWORD_PHONE_MSG  =  'OTP has been sent to your phone number.';
    const FORGOT_PHONE_OTP_VERIFICATION_MSG  =  'OTP has been sent to your email address.';
    const FORGOT_PASSWORD_SUCCESS_MSG  =  'Password has been reset successfully.';

    const EMAIL_VERIFICATION_SUCCESS_MSG  =  'Your email address has been verified.';

    const TWO_FA_MSG =  'OTP has been sent to your phone number.';
    const TWO_FA_ENABLED_MSG =  'Multi Factor Authentication has been enabled.';
    const TWO_FA_DISABLED_MSG =  'Multi Factor Authentication has been disabled.';

    const UPDATE_PHONE_MSG =  'OTP has been sent to your phone number.';
    const UPDATE_PHONE_SUCCESS_MSG =  'Phone number has been updated successfully.';

    const ACCOUNT_LINKING_MSG =  'Account has been linked.';
    const ACCOUNT_UNLINKING_MSG =  'Account has been unlinked.';

    const ADD_EMAIL_MSG =  'Please verify your email.';
    const REMOVE_EMAIL_MSG =  'Email has been removed successfully.';
    const ADD_OTP_MSG =  'OTP has been sent to your email address, please verify.';

    const UPDATE_USER_PROFILE =  'User profile has been updated successfully.';
    const CHANGE_PASSWORD_SUCCESS_MSG =  'Password has been updated successfully.';
}