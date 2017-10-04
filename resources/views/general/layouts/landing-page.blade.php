
<!DOCTYPE html SYSTEM "about:legacy-compat">
<html xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script><title>Paper Clip</title><meta name="description" content="Paper clip is about sharing knowledge about languages. especially English. Here will contains a comparison of words or phrases, slang, etc. in small notes."><meta name="keywords" content=""><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="apple-touch-icon" sizes="57x57" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/apple-touch-icon-180x180.png"><link rel="icon" type="image/png" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/favicon-32x32.png" sizes="32x32"><link rel="icon" type="image/png" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/favicon-194x194.png" sizes="194x194"><link rel="icon" type="image/png" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/favicon-96x96.png" sizes="96x96"><link rel="icon" type="image/png" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/android-chrome-192x192.png" sizes="192x192"><link rel="icon" type="image/png" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/favicon-16x16.png" sizes="16x16"><link rel="manifest" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/manifest.json"><link rel="shortcut icon" href="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/favicon.ico"><meta name="msapplication-TileColor" content="#ff0000"><meta name="msapplication-TileImage" content="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/mstile-144x144.png"><meta name="msapplication-config" content="http://app.gr-cdn.com/images/squeeze-page/_external/various/favicons/browserconfig.xml"><meta name="theme-color" content="#ffffff"><script type="text/javascript" src="http://paperclip.gr8.com/images/lps/js/lpc.js"></script><script type="text/javascript" src="http://paperclip.gr8.com/images/lps/js/jquery-3.1.0.min.js"></script><link rel="stylesheet" href="http://paperclip.gr8.com/images/lps/css/reset.css?timestamp=20042017"><link rel="stylesheet" href="http://paperclip.gr8.com/images/lps/css/core.css?timestamp=20042017"><link rel="stylesheet" href="http://paperclip.gr8.com/images/lps/css/webform.css?timestamp=20042017"><link rel="stylesheet" href="http://paperclip.gr8.com/images/common/templates/landing/264/1/css/style.css"><script type="text/javascript">
                    var timerStart = Date.now();
                </script><script type="text/javascript">
                    var REG = {
                        thankyouurl: 'stay',
                        thankyoutext: 'Thank you!' || 'Thank you!',
                        url: 'http://paperclip.gr8.com',
                        url_to_old_mobile_styles: 'http://paperclip.gr8.com/images/lps/css/old_mobile.css?timestamp=20042017'
                    };

                    APP.setItem('webinars', {
                        settings: {
                            read: false,
                            write: false,
                        },
                        list: JSON.parse('' || null)
                    });
                </script><style id="def-mark" type="text/css">section#section-hh8dj [data-section="wrap"] { width: 980px; }
section#section-hh8dj { z-index: 2; }
div#edi-vvjvv img { width: 176px; height: 39px; }
div#edi-vvjvv { top: 38px; left: 50px; width: 176px; height: 39px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_15.png") 0px 0px / 176px no-repeat; }
div#edi-8jadv { top: 98px; left: 49px; width: 210px; height: auto; }
div#edi-7v1a8 { top: 181px; left: 50px; width: 198px; height: auto; }
div#edi-a8sq8 { top: 386px; left: 48px; width: 189px; height: 43px; }
div#edi-tjttd { top: -40px; left: 667px; width: 283px; height: 476px; background-color: rgb(123, 75, 36); box-shadow: rgba(33, 21, 27, 0.2) 0px 8px 16px; }
div#edi-a8sdq { top: 23px; left: 280px; width: 400px; height: auto; }
div#edi-aj1ls { top: 59px; left: 259px; width: 440px; height: auto; }
div#edi-dj1rj img { width: 36px; height: 38px; }
div#edi-dj1rj { left: 32px; width: 36px; height: 38px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_05.png") 0px 0px / 36px no-repeat; }
div#edi-ddrjr { top: 49px; width: 100px; height: auto; }
div#edi-d1d1b { top: 125px; left: 124px; width: 100px; height: 100px; }
div#edi-qpqqj img { width: 38px; height: 38px; }
div#edi-qpqqj { left: 31px; width: 38px; height: 38px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_06.png") 0px 0px / 38px no-repeat; }
div#edi-a166q { top: 49px; width: 100px; height: auto; }
div#edi-a80dq { top: 125px; left: 224px; width: 100px; height: 100px; }
div#edi-jpqfp img { width: 39px; height: 33px; }
div#edi-jpqfp { top: 2px; left: 31px; width: 39px; height: 33px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_07.png") 0px 0px / 39px no-repeat; }
div#edi-oq8oy { top: 49px; width: 100px; height: auto; }
div#edi-j81jd { top: 125px; left: 324px; width: 100px; height: 100px; }
div#edi-6qo1j img { width: 48px; height: 23px; }
div#edi-6qo1j { top: 7px; left: 26px; width: 48px; height: 23px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_08.png") 0px 0px / 48px no-repeat; }
div#edi-n81qn { top: 49px; width: 100px; height: auto; }
div#edi-nlj1l { top: 125px; left: 424px; width: 100px; height: 100px; }
div#edi-djdjd img { width: 40px; height: 36px; }
div#edi-djdjd { top: 1px; left: 30px; width: 40px; height: 36px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_09.png") 0px 0px / 40px no-repeat; }
div#edi-18mjm { top: 49px; width: 100px; height: auto; }
div#edi-q1adg { top: 125px; left: 524px; width: 100px; height: 100px; }
div#edi-a8l1l img { width: 31px; height: 40px; }
div#edi-a8l1l { top: -1px; left: 34px; width: 31px; height: 40px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_10.png") 0px 0px / 31px no-repeat; }
div#edi-la8gj { top: 49px; width: 100px; height: auto; }
div#edi-8c1dc { top: 125px; left: 624px; width: 100px; height: 100px; }
div#edi-qkk1k img { width: 37px; height: 31px; }
div#edi-qkk1k { top: 3px; left: 31px; width: 37px; height: 31px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_11.png") 0px 0px / 37px no-repeat; }
div#edi-cadda { top: 49px; width: 100px; height: auto; }
div#edi-d8ak1 { top: 125px; left: 724px; width: 100px; height: 100px; }
div#edi-qdjja { width: 560px; height: 316px; }
div#edi-8j88j { top: 357px; left: 70px; width: 430px; height: auto; }
div#edi-aaj1q { top: 391px; left: 66px; width: 430px; height: auto; }
div#edi-iijdi { top: 255px; width: 384px; height: 56px; }
div#webform_text-hndhd { height: 100%; width: 100%; }
div#webform_label-j1dhd { height: 100%; width: 100%; }
div#edi-ah8c8 { top: 174px; height: 40px; width: 384px; }
div#webform_text-d1gag { height: 100%; width: 100%; }
div#webform_label-jqgqa { height: 100%; width: 100%; }
div#edi-8ddgd { top: 101px; height: 40px; width: 384px; }
div#webform_text-1a1ff { height: 100%; width: 100%; }
div#webform_label-jv1d1 { height: 100%; width: 100%; }
div#edi-dbabq { top: 27px; height: 40px; width: 384px; }
div#edi-8eeq2 { top: 399px; left: 88px; height: 330px; width: 384px; }
div#edi-d8jqd { top: -736px; left: 200px; width: 560px; height: 772px; background-color: rgb(242, 237, 229); box-shadow: rgba(33, 21, 27, 0.3) 0px 5px 50px; }
div#edi-dqd7a { top: 42px; left: 90px; height: auto; width: 136.062px; }
div#edi-jjcd1 img { width: 300px; height: 120px; }
div#edi-jjcd1 { top: 103px; left: 10px; width: 300px; height: 120px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_02.png") 0px 0px / 300px no-repeat; }
div#edi-chajj { top: 232px; left: 23px; width: 280px; height: auto; }
div#edi-dcccq { top: 67px; width: 320px; height: 330px; }
div#edi-88ccc { top: 42px; left: 75px; height: auto; width: 169.406px; }
div#edi-dqddb img { width: 300px; height: 120px; }
div#edi-dqddb { top: 103px; left: 15px; width: 300px; height: 120px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_03.png") 0px 0px / 300px no-repeat; }
div#edi-jfdbb { top: 232px; left: 39px; width: 240px; height: auto; }
div#edi-dabb1 { top: 67px; left: 320px; width: 330px; height: 330px; }
div#edi-q4q8d { top: 42px; left: 110px; height: auto; width: 112.078px; }
div#edi-1qq1q img { width: 300px; height: 120px; }
div#edi-1qq1q { top: 103px; left: 10px; width: 300px; height: 120px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_04.png") 0px 0px / 300px no-repeat; }
div#edi-1j1jq { top: 232px; left: 25px; width: 280px; height: auto; }
div#edi-aqaaj { top: 67px; left: 650px; width: 320px; height: 330px; }
div#edi-ajdda img { width: 145px; height: 33px; }
div#edi-ajdda { top: 38px; left: 135px; width: 145px; height: 33px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_12.png") 0px 0px / 145px no-repeat; }
div#edi-t9t89 { top: 47px; left: 566px; width: 260px; height: auto; }
div#edi-a18a9 { top: 102px; left: 178px; width: 600px; height: auto; }
section#section-a899j [data-section="wrap"] { width: 980px; }
section#section-a899j { height: 483px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_14.jpg") 50% 100% no-repeat rgb(255, 255, 255); }
section#section-18981 [data-section="wrap"] { width: 980px; }
section#section-18981 { height: 321px; background-color: rgb(247, 244, 239); }
section#section-888d8 [data-section="wrap"] { width: 980px; }
section#section-888d8 { height: 420px; background-color: rgb(247, 244, 239); }
section#section-aspxt [data-section="wrap"] { width: 980px; }
section#section-aspxt { height: 936px; background: url("https://app.getresponse.com/images/common/templates/landing/264/1/img/264_01.jpg") 50% 100% no-repeat rgb(255, 255, 255); }
section#section-8j8dd [data-section="wrap"] { width: 980px; }
section#section-8j8dd { z-index: 2; }</style><style id="def-mark-hover" type="text/css"></style><style id="def-mark-phone" type="text/css" media="only screen and (max-width: 600px)">section#section-a899j { height: 425px; }
div#edi-a8sq8 { top: 337px; left: 47px; width: 189px; }
div#edi-7v1a8 { top: 146px; left: 42.5px; width: 198px; text-align: center; }
div#edi-8jadv { top: 69px; left: 36.5px; width: 210px; text-align: center; }
div#edi-vvjvv { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 53.5px; }
div#edi-tjttd { top: 15px; left: 58.5px; width: 283px; height: 395px; }
section#section-18981 { height: 947px; }
div#edi-ddrjr { top: 68px; left: 15px; width: 70px; text-align: center; }
div#edi-dj1rj { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 32px; }
div#edi-d1d1b { top: 827px; left: 150px; width: 100px; height: 105px; }
div#edi-a166q { top: 68px; left: 15px; width: 70px; text-align: center; }
div#edi-qpqqj { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 31px; }
div#edi-a80dq { top: 707px; left: 150px; width: 100px; height: 105px; }
div#edi-oq8oy { top: 63px; left: 15px; width: 70px; text-align: center; }
div#edi-jpqfp { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 30.5px; }
div#edi-j81jd { top: 592px; left: 150px; width: 100px; height: 100px; }
div#edi-n81qn { top: 53px; left: 15px; width: 70px; text-align: center; }
div#edi-6qo1j { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 26px; }
div#edi-nlj1l { top: 487px; left: 150px; width: 100px; height: 90px; }
div#edi-18mjm { top: 66px; left: 15px; width: 70px; text-align: center; }
div#edi-djdjd { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 30px; }
div#edi-q1adg { top: 369px; left: 150px; width: 100px; height: 103px; }
div#edi-la8gj { top: 70px; left: 15px; width: 70px; text-align: center; }
div#edi-a8l1l { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 34.5px; }
div#edi-8c1dc { top: 247px; left: 150px; width: 100px; height: 107px; }
div#edi-cadda { top: 61px; left: 15px; width: 70px; text-align: center; }
div#edi-qkk1k { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 31.5px; }
div#edi-d8ak1 { top: 134px; left: 150px; width: 100px; height: 98px; }
div#edi-aj1ls { top: 56px; left: 15px; width: 370px; text-align: center; }
div#edi-a8sdq { top: 15px; left: 15px; width: 370px; text-align: center; }
section#section-888d8 { height: 1677px; }
div#edi-chajj { top: 217px; left: 20px; width: 280px; text-align: center; }
div#edi-jjcd1 { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 82px; left: 10px; }
div#edi-dqd7a { top: 15px; left: 91.9766px; width: 136.047px; text-align: center; }
div#edi-dcccq { top: 1364px; left: 40px; width: 320px; height: 298px; }
div#edi-jfdbb { top: 217px; left: 45px; width: 240px; text-align: center; }
div#edi-dqddb { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 82px; left: 15px; }
div#edi-88ccc { top: 15px; left: 80.3047px; width: 169.391px; text-align: center; }
div#edi-dabb1 { top: 1051px; left: 35px; width: 330px; height: 298px; }
div#edi-1j1jq { top: 217px; left: 20px; width: 280px; text-align: center; }
div#edi-1qq1q { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 82px; left: 10px; }
div#edi-q4q8d { top: 15px; left: 103.969px; width: 112.062px; text-align: center; }
div#edi-aqaaj { top: 738px; left: 40px; width: 320px; height: 298px; }
div#edi-iijdi { top: 180px; left: 15px; width: 310px; }
div#edi-ah8c8 { top: 125px; left: 15px; width: 310px; }
div#edi-8ddgd { top: 70px; left: 15px; width: 310px; }
div#edi-dbabq { top: 15px; left: 15px; width: 310px; }
div#edi-8eeq2 { top: 442px; left: 15px; width: 340px; height: 251px; }
div#edi-aaj1q { top: 413px; left: 15px; width: 340px; text-align: center; }
div#edi-8j88j { top: 346px; left: 15px; width: 340px; text-align: center; }
div#edi-qdjja { top: 15px; left: 15px; width: 340px; }
div#edi-d8jqd { top: 15px; left: 15px; width: 370px; height: 708px; }
section#section-aspxt { height: 204px; }
div#edi-a18a9 { top: 96px; left: 15px; width: 370px; text-align: center; }
div#edi-t9t89 { top: 63px; left: 70px; width: 260px; text-align: center; }
div#edi-ajdda { -webkit-transform: scale(1);-moz-transform: scale(1);-ms-transform: scale(1);transform: scale(1); transform-origin: 0px 0px 0px; top: 15px; left: 127.5px; }
section#section-a899j [data-section="wrap"] { width: 400px; }
section#section-18981 [data-section="wrap"] { width: 400px; }
section#section-888d8 [data-section="wrap"] { width: 400px; }
section#section-aspxt [data-section="wrap"] { width: 400px; }
section#section-hh8dj [data-section="wrap"] { width: 400px; }
[data-editable="text"] { text-align: center; }
[hidden-on-phone="true"] { display: none; }</style><script type="text/javascript">
                    (function () {
                        APP.initialData = {
                            tracking_code_id: '',
                            tracking_code_type: '',
                            google_adwords_id: '',
                            google_adwords_conversion_label: ''
                        };
                    }());
                </script><!-- Getresponse Analytics -->
<script type="text/javascript" src="https://ga.getresponse.com/script/ga.js?grid=sBDcEWkVZfX4IAQ%3D%3D" async></script>
<!-- End Getresponse Analytics --></head><body xmlns="http://www.w3.org/1999/xhtml" marginwidth="0" marginheight="0" data-widget="arena" data-variant-id="0" id="body-qk66q" data-uid="body-qk66q" data-draggable="false" data-viewing-mode="phone" data-workspace-phone-width="400" data-optimize-phone="true"><div hidden="true" id="OPT">
        <form action="#" method="post">
            <div>
                <select name="GoogleWebFont">
                    <option value="'Roboto', sans-serif">Roboto:400,400i:latin,latin-ext</option>
                    <option value="'Julius Sans One', sans-serif;">Julius+Sans+One:400:latin,latin-ext</option>
                </select>
            </div>
        </form>
    </div><section data-section="section" id="section-aspxt" data-uid="section-aspxt" class="fix-background-size-cover" data-draggable="true">
        <div data-section="wrap" data-reverse="true"><div data-editable="text" id="edi-a18a9" data-uid="edi-a18a9" class="" data-draggable="true">
                <div style="font-family: 'Julius Sans One', sans-serif; font-size: 26px; font-weight: 400; text-align: center; color:#fff;line-height: 1.2;" class="text-content">
                    Let us brighten your special occasions with our customized cakes.
                </div>
            </div><div data-editable="text" id="edi-t9t89" data-uid="edi-t9t89" class="" data-draggable="true">
                <div style="font-family: 'Roboto', sans-serif; font-size: 11px; font-weight: 400; text-align: right; color:#f2ede5;line-height: 1.2;" class="text-content">
                    Order by phone: <span style="font-size: 15px;">800-123-4567</span>
                </div>
            </div>
            <div data-editable="multimedia:image" id="edi-ajdda" data-uid="edi-ajdda" class="" data-draggable="true" style="background: none;">
                
            <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_12.png" alt="/" width="145" height="33" /></div>
            
            
        <div class="component-backdrop"></div><div class="component-marker"></div></div>
    </section><section data-section="section" id="section-888d8" data-uid="section-888d8" class="" data-draggable="true">
        <div data-section="wrap" data-reverse="true"><div data-editable="box" data-reverse="true" id="edi-aqaaj" data-uid="edi-aqaaj" class="" data-draggable="true"><div data-editable="text" id="edi-1j1jq" data-uid="edi-1j1jq" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Let us create customized cupcakes to enhance your special occasions. We provide up to 50 types of cupcakes on demand.
                    </div>
                </div><div data-editable="multimedia:image" id="edi-1qq1q" data-uid="edi-1qq1q" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_04.png" alt="/" width="300" height="120" /></div>
                <div data-editable="text" id="edi-q4q8d" data-uid="edi-q4q8d" class="" data-draggable="true">
                    <div style="font-family: 'Julius Sans One', sans-serif; font-size: 22px; font-weight: 400; text-align: center; color:#3b2530;line-height: 1.2;" class="text-content">
                        Delicious<br /> cupcakes
                    </div>
                </div>
                
                
            </div><div data-editable="box" data-reverse="true" id="edi-dabb1" data-uid="edi-dabb1" class="" data-draggable="true"><div data-editable="text" id="edi-jfdbb" data-uid="edi-jfdbb" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Tell us one week in advance, and we’ll deliver specially baked birthday cakes in any flavors you want.
                    </div>
                </div><div data-editable="multimedia:image" id="edi-dqddb" data-uid="edi-dqddb" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_03.png" alt="/" width="300" height="120" /></div>
                <div data-editable="text" id="edi-88ccc" data-uid="edi-88ccc" class="" data-draggable="true">
                    <div style="font-family: 'Julius Sans One', sans-serif; font-size: 22px; font-weight: 400; text-align: center; color:#3b2530;line-height: 1.2;" class="text-content">
                        Special<br /> birthday cakes
                    </div>
                </div>
                
                
            </div><div data-editable="box" data-reverse="true" id="edi-dcccq" data-uid="edi-dcccq" class="" data-draggable="true"><div data-editable="text" id="edi-chajj" data-uid="edi-chajj" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Our colorful macaroons can be customized for every occasion, including weddings, baby showers, graduations, and birthdays.
                    </div>
                </div><div data-editable="multimedia:image" id="edi-jjcd1" data-uid="edi-jjcd1" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_02.png" alt="/" width="300" height="120" /></div>
                <div data-editable="text" id="edi-dqd7a" data-uid="edi-dqd7a" class="" data-draggable="true">
                    <div style="font-family: 'Julius Sans One', sans-serif; font-size: 22px; font-weight: 400; text-align: center; color:#3b2530;line-height: 1.2;" class="text-content">
                        Colorful<br /> macaroons
                    </div>
                </div>
                
                
            </div>
            <div data-editable="box" data-reverse="true" id="edi-d8jqd" data-uid="edi-d8jqd" class="" data-draggable="true"><div data-editable="webformNew" data-label-type="placeholder" id="edi-8eeq2" data-uid="edi-8eeq2" class="" data-draggable="true" data-blockeddrop="all" data-height-setting="40">
                    <form class="custom-form" action="" accept-charset="utf-8" method="post">
                        <div data-editable="webformNewItem" data-item-type="webform_text" data-item-name="name" data-removable="false" data-item-label="Name" id="edi-dbabq" data-uid="edi-dbabq" class="" data-draggable="true">
    <div data-editable-item="label" id="webform_label-jv1d1" data-uid="webform_label-jv1d1" class="">
        <label for="not_webform_label-jv1d1-for">Name</label>
    </div>
    <div data-editable-item="field" id="webform_text-1a1ff" data-uid="webform_text-1a1ff" class="">
        <input type="text" name="name" autocomplete="off" id="webform_label-jv1d1-for" data-is-custom="false" />
    </div>
</div>
                        <div data-editable="webformNewItem" data-item-type="webform_text" data-item-name="email" data-caption="Email address" data-removable="false" id="edi-8ddgd" data-uid="edi-8ddgd" class="" data-draggable="true">
    <div data-editable-item="label" id="webform_label-jqgqa" data-uid="webform_label-jqgqa" class="">
        <label for="not_webform_label-jqgqa-for">Your Email</label>
    </div>
    <div data-editable-item="field" id="webform_text-d1gag" data-uid="webform_text-d1gag" class="">
        <input type="text" name="email" autocomplete="off" id="webform_label-jqgqa-for" data-is-custom="false" />
    </div>
</div>
                        <div data-editable="webformNewItem" data-item-type="webform_text" data-item-name="Phone" data-caption="Phone number" data-item-what="phone" data-removable="false" id="edi-ah8c8" data-uid="edi-ah8c8" class="" data-draggable="true">
    <div data-editable-item="label" id="webform_label-j1dhd" data-uid="webform_label-j1dhd" class="">
        <label for="not_webform_label-j1dhd-for">Phone</label>
    </div>
    <div data-editable-item="field" id="webform_text-hndhd" data-uid="webform_text-hndhd" class="">
        <input type="text" name="Phone" autocomplete="off" id="webform_label-j1dhd-for" data-is-custom="true" />
    </div>
</div>
                        <div data-editable="webformNewButton" data-caption="Contact now" data-removable="false" id="edi-iijdi" data-uid="edi-iijdi" class="" data-draggable="true">
    <button type="submit" value="Contact now">Contact now</button>
</div>
                    </form>
                </div><div data-editable="text" id="edi-aaj1q" data-uid="edi-aaj1q" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif;font-size:12px; font-weight:400; color:#3b2530;line-height:1.2;text-align:center;" class="text-content">
                        Fill out this short form, and we’ll get back to you shortly.
                    </div>
                </div><div data-editable="text" id="edi-8j88j" data-uid="edi-8j88j" class="" data-draggable="true">
                    <div style="font-family: 'Julius Sans One', sans-serif;font-size:22px; font-weight:400; color:#cc214f;line-height:1.2;text-align:center;" class="text-content">
                        Get in touch to start ordering.
                    </div>
                </div>
                <div data-editable="video" id="edi-qdjja" data-uid="edi-qdjja" class="" data-draggable="true">
                    <iframe src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_13.jpg" allowfullscreen="" frameborder="0" height="100%" width="100%"></iframe>
                </div>
                
                
                
            </div>

            
            
            
        <div class="component-backdrop"></div><div class="component-marker"></div></div>
    </section><section data-section="section" id="section-18981" data-uid="section-18981" class="" data-draggable="true">
        <div data-section="wrap" data-reverse="true"><div data-editable="box" data-reverse="true" id="edi-d8ak1" data-uid="edi-d8ak1" class="" data-draggable="true"><div data-editable="text" id="edi-cadda" data-uid="edi-cadda" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Desserts
                    </div>
                </div>
                <div data-editable="multimedia:image" id="edi-qkk1k" data-uid="edi-qkk1k" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_11.png" alt="/" width="37" height="31" /></div>
                
            </div><div data-editable="box" data-reverse="true" id="edi-8c1dc" data-uid="edi-8c1dc" class="" data-draggable="true"><div data-editable="text" id="edi-la8gj" data-uid="edi-la8gj" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Brownies
                    </div>
                </div>
                <div data-editable="multimedia:image" id="edi-a8l1l" data-uid="edi-a8l1l" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_10.png" alt="/" width="31" height="40" /></div>
                
            </div><div data-editable="box" data-reverse="true" id="edi-q1adg" data-uid="edi-q1adg" class="" data-draggable="true"><div data-editable="text" id="edi-18mjm" data-uid="edi-18mjm" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Pastries
                    </div>
                </div>
                <div data-editable="multimedia:image" id="edi-djdjd" data-uid="edi-djdjd" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_09.png" alt="/" width="40" height="36" /></div>
                
            </div><div data-editable="box" data-reverse="true" id="edi-nlj1l" data-uid="edi-nlj1l" class="" data-draggable="true"><div data-editable="text" id="edi-n81qn" data-uid="edi-n81qn" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Croissants
                    </div>
                </div>
                <div data-editable="multimedia:image" id="edi-6qo1j" data-uid="edi-6qo1j" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_08.png" alt="/" width="48" height="23" /></div>
                
            </div><div data-editable="box" data-reverse="true" id="edi-j81jd" data-uid="edi-j81jd" class="" data-draggable="true"><div data-editable="text" id="edi-oq8oy" data-uid="edi-oq8oy" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Tarts
                    </div>
                </div>
                <div data-editable="multimedia:image" id="edi-jpqfp" data-uid="edi-jpqfp" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_07.png" alt="/" width="39" height="33" /></div>
                
            </div><div data-editable="box" data-reverse="true" id="edi-a80dq" data-uid="edi-a80dq" class="" data-draggable="true"><div data-editable="text" id="edi-a166q" data-uid="edi-a166q" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Cookies
                    </div>
                </div>
                <div data-editable="multimedia:image" id="edi-qpqqj" data-uid="edi-qpqqj" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_06.png" alt="/" width="38" height="38" /></div>
                
            </div><div data-editable="box" data-reverse="true" id="edi-d1d1b" data-uid="edi-d1d1b" class="" data-draggable="true"><div data-editable="text" id="edi-ddrjr" data-uid="edi-ddrjr" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.6;" class="text-content">
                        Muffins
                    </div>
                </div>
                <div data-editable="multimedia:image" id="edi-dj1rj" data-uid="edi-dj1rj" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_05.png" alt="/" width="36" height="38" /></div>
                
            </div><div data-editable="text" id="edi-aj1ls" data-uid="edi-aj1ls" class="" data-draggable="true">
                <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; text-align: center; color:#8b8479;line-height: 1.5;" class="text-content">
                    We’re proud to provide a large variety of fresh baked goods every day. Take a look below and see what else you can order.
                </div>
            </div>
            <div data-editable="text" id="edi-a8sdq" data-uid="edi-a8sdq" class="" data-draggable="true">
                <div style="font-family: 'Julius Sans One', sans-serif; font-size: 22px; font-weight: 400; text-align: center; color:#3b2530;line-height: 1.2;" class="text-content">
                    What else can you order?
                </div>
            </div>
            
            
            
            
            
            
            
            
        <div class="component-backdrop"></div><div class="component-marker"></div></div>
    </section><section data-section="section" id="section-a899j" data-uid="section-a899j" class="fix-background-size-cover" data-draggable="true">
        <div data-section="wrap" data-reverse="true">
            <div data-editable="box" data-reverse="true" id="edi-tjttd" data-uid="edi-tjttd" class="" data-draggable="true"><div data-editable="button" id="edi-a8sq8" data-uid="edi-a8sq8" class="" data-draggable="true">
                    <a href="#section-aspxt" data-url="#section-aspxt" title="" target="_self"></a>
                    <button type="button"><div style="font-size:18px; font-weight: 400; text-align: center;">Contact now</div></button>
                </div><div data-editable="text" id="edi-7v1a8" data-uid="edi-7v1a8" class="" data-draggable="true">
                    <div style="font-family: 'Roboto', sans-serif; font-size: 14px; font-weight: 400; color:#dbd2ca;line-height: 1.6;" class="text-content">
                        CINNAMON CARROT CAKE This month, many of our customers enjoyed our cinnamon carrot cake, which we have been baking for the last 10 years. If you’d like the to be one of those satisfied customers, contact us now.
                    </div>
                </div><div data-editable="text" id="edi-8jadv" data-uid="edi-8jadv" class="" data-draggable="true">
                    <div style="font-family: 'Julius Sans One', sans-serif; font-size: 26px; font-weight: 400; color:#fff;line-height: 1.2;" class="text-content">
                        This month’s best seller
                    </div>
                </div>
                <div data-editable="multimedia:image" id="edi-vvjvv" data-uid="edi-vvjvv" class="" data-draggable="true" style="background: none;">
                    
                <img src="http://paperclip.gr8.com/images/common/templates/landing/264/1/img/264_15.png" alt="/" width="176" height="39" /></div>
                
                
                
            </div>
        <div class="component-backdrop"></div><div class="component-marker"></div></div>
    </section><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"ee0b9c04dc","applicationID":"57569376","transactionName":"NQQGNhBXV0BZVkJdDgxOJxcRQlZeF3hZUDITFAEHGFNpUl9QGWcJDRZET1wWUF1cUE4aCRYMCA==","queueTime":0,"applicationTime":174,"atts":"GUMFQFhNRE4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body><script type="text/javascript" src="http://app.gr-cdn.com/javascripts/core/js/pages/panel/squeeze/lpc-show-cc333d7a20.min.js"></script></html>
