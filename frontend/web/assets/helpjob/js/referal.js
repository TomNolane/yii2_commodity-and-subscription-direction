/**
 *  Referals
 */

function isdefined(variable) {
    if (typeof(window[variable]) == "undefined")
        return false;
    return variable.length > 0;
}
function setMyCookie(cookieName, cookieContent) {
    var expDate = new Date();
    expDate.setTime(expDate.getTime() + 8640000000000);
    document.cookie = cookieName + "=" + escape(cookieContent) + "; path=" + escape("/") + "; expires=" + expDate.toGMTString();
    return;
}
function getMyCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) c_end = document.cookie.length;
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

var refSiteId = '';
var currentRefId = '';

var paramsArray = window.location.search.substr(1).toLowerCase().split("&");
for (i = 0; i < paramsArray.length; i++) {
    if (paramsArray[i]) {
        var pair = paramsArray[i].split("=");
        if (pair[0].length == 32) {
            currentRefId = pair[0];
        } else if (pair[0] == "siteid") {
            refSiteId = pair[1];
        } else if (pair[0] == "click") {
            refSiteId = pair[1];
        } else if (pair[0] == "tid") {
            refSiteId = pair[1];
        } else if (pair[0] == "ref") {
            refSiteId = pair[1];
        } else if (pair[0] == "get-click-site-id") {
            refSiteId = pair[1];
		} else if (pair[0] == "mgd_src") {
            refSiteId = pair[1];
		} else if (pair[0] == "mixclick") {
            refSiteId = pair[1];	
        }
    }
}

var firstRefId = getMyCookie("frf");
if (currentRefId.length > 0) {
    if (firstRefId != currentRefId) {
        secondRefId = firstRefId;
        setMyCookie('srf', secondRefId);
    }
    setMyCookie('frf', currentRefId);
    firstRefId = currentRefId;
    if (refSiteId.length == 0) {
        setMyCookie('siteid', '');
    }
}
if (refSiteId.length > 0) {
    setMyCookie('siteid', refSiteId);
}
refSiteId = getMyCookie("siteid");
if (refSiteId.length > 0) {
    refSiteId = '|' + refSiteId;
}
if (currentRefId.length > 0) {
    setMyCookie('fullurl', window.location.href);
    location.replace(window.location.href.split('?')[0]);
} else {
    var fullurl = getMyCookie('fullurl');
    if (fullurl.length == 0)
        fullurl = window.location.href;
}