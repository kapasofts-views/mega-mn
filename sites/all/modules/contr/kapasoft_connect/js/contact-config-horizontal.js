/**
 * Created with JetBrains PhpStorm.
 * User: maxit
 * Date: 7/24/13
 * Time: 9:17 PM
 * To change this template use File | Settings | File Templates.
 */
var CONTACT = (function () {
    return {
        response: 'Thank you. We will respond shortly',

        button: {
            elemText: 'Send Message',
            elemClass: 'sendmail alignleft fix-wrap fix-buttom'
        },
        name: {
            elemText: "NAME",
            elemClass: 'fix-input sizing-name fix-wrap span12'
        },
        subject: {
            elemText: '',
            elemType: 'hidden'
        },
        email:{
            elemText:"E-MAIL",
            elemClass:"fix-email fix-wrap span12"
        },
        message:{
            elemText:"ENTER YOUR MESSAGE",
            elemClass:"fix-input fix-wrap span12"
        }
    };
}());