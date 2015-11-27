// statistics appid

forceAppidTo = (typeof forceAppidTo == "undefined") ? null : forceAppidTo;
forceOrganicAppidTo = (typeof forceOrganicAppidTo == "undefined") ? null : forceOrganicAppidTo;

var appidObj = {

	appID : null,
	lpID: null,
	systemID : "",
	statisticsHost : "http://www.mlstat.com",
	clientVersion 	  : "",
	clientBuildNumber : "",
	browserCode : "",
	browserLang : "",
	osCode : "",
	appidPixel : null,
	COOKIE_EXPIRATION_DAYS : 5 * 365,
	ORGANIC_APPID_THRESHOLD : 100,

	refToAppid : 
	{
		'.google.':          20,
		'.yahoo.':           21,
		'.aol.':             22,
		'.msn.':             23,
		'.live.':            24,
		'.ask.':             25,
		'.mywebsearch.':     26,
		'.virgilio.':        27,
		'.onet.':            28,
		'.altavista.':       29,
		'.baidu.':           30,
		'.t-online.':        31,
		'.bing.':            32,
		'.filehippo.':       40,
		'.downloadtr.':      41,
		'download.cnet.com': 42,
		'.softpile.':        43,
		'.wikipedia.':       44,
		'.download.net.pl':  45,
		'.pobieralnia.':     46,
		'.brothersoft.':     47,
		'.facebook.':        62
	},

	classIdsForClient :
	{
		'IMIMWC': "7C3B01BC-53A5-48A0-A43B-0C67731134B9",
		'BSIMWC': "7C3B01BC-53A5-48A0-A43B-0C67731134BA",
		'SHIMWC': "7C3B01BC-53A5-48A0-A43B-0C67731134BB",
		'LPIMWC': "7C3B01BC-53A5-48A0-A43B-0C67731134BC"
	},

	EVENT_TYPE_MAP :
	{
		'hit'                : {'eventId' : 1,
		                        'eventTimeout' : 0},
		'subsequentHit'      : {'eventId' : 2,
		                        'eventTimeout' : 0},
		'download'           : {'eventId' : 3,
		                        'eventTimeout' : 500},
		'subsequentDownload' : {'eventId' : 4,
		                        'eventTimeout' : 500},
		'installSuccess'     : {'eventId' : 5,
		                        'eventTimeout' : 0},
		'registration'       : {'eventId' : 6,
		                        'eventTimeout' : 0},
		'search'             : {'eventId' : 7,
		                        'eventTimeout' : 0},
		'uninstall'          : {'eventId' : 8,
		                        'eventTimeout' : 0},
		'installUpdate'      : {'eventId' : 9,
		                        'eventTimeout' : 0},
		'searchAcceptance'   : {'eventId' : 10,
		                        'eventTimeout' : 0}
	},

	browserTypes :
	{
		'msie 6'    : 1, 
		'msie 7'    : 2, 
		'trident/4' : 3, //IE8 
		'firefox/2' : 4, 
		'firefox/3' : 5, 
		'chrome'    : 6, 
		'safari'    : 7, 
		'opera'     : 8, 
		'unknown'   : 9, 
		'chrome/2'  : 10, 
		'chrome/3'  : 11, 
		'chrome/4'  : 12, 
		'chrome/5'  : 13, 
		'chrome/6'  : 14, 
		'chrome/7'  : 15, 
		'trident/5' : 16, //IE9
		'chrome/8'  : 17, 
		'chrome/9'  : 18, 
		'chrome/10' : 19, 
		'firefox/4' : 20, 
		'chrome/11' : 21, 
		'chrome/12' : 22, 
		'firefox/5' : 23
	},

	addLoadEvent : function (func) 
	{
		var oldOnload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		} else {
			window.onload = function() {
				if (oldOnload) {
					oldOnload();
				}
				func();
			}
		}
	},

	getURLParam : function (name, url)
	{
		if (!url)
			url = window.location.href;

		name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
		var regexS = "[\\?&]"+name+"=([^&#]*)";
		var regex = new RegExp( regexS );
		var results = regex.exec( url );
		if( results == null )
			return null;
		else
			return results[1];
	},

	setCookie : function (cookieName,value,expiredays,path,domain)
	{
		if (!domain) {
			var hostDomain  = document.location.hostname;
			var domainParts = hostDomain.split('.');
			domain = (domainParts.length <= 2) ? '.' + hostDomain : '.' + (domainParts.slice(domainParts.length - 2)).join('.');
		}
		
		if (!path)
			path = "/";
			
		var exdate=new Date();
		exdate.setDate(exdate.getDate()+expiredays);
		document.cookie=cookieName+ "=" +escape(value)+
		((expiredays==null) ? "" : ";expires="+exdate.toGMTString())+
		((path) ? ";path=" + path : "")+
		((domain) ? ";domain=" + domain : "");
	},

	getCookie : function (cookieName)
	{
		if (document.cookie.length>0)
		{
			c_start=document.cookie.indexOf(cookieName + "=");
			if (c_start!=-1)
			{
				c_start=c_start + cookieName.length+1;
				c_end=document.cookie.indexOf(";",c_start);
				if (c_end==-1) c_end=document.cookie.length;
					return unescape(document.cookie.substring(c_start,c_end));
			}
		}
		return null;
	},

	getbrowserCode : function ()
	{
		var nobrowserCode = 0;
		
		var userAgent = navigator.userAgent.toLowerCase();
		//var version	  = (userAgent.match( /.+(?:rv|it|ra|ie|me)[\/: ]([\d.]+)/ ) || [])[1];

		var code = this.browserTypes['unknown'];

		for(key in this.browserTypes)
		{
			if (userAgent.match(key))
			{
				code = this.browserTypes[key];
			}
		}
		
		return code ? code : nobrowserCode;
	},

	getOSCode : function ()
	{
		var userOS    = navigator.userAgent.toLowerCase();
		var osVersion = userOS.match(/nt [0-9].[0-9]/gi);
		
		if (osVersion.length > 0)
			osVersion = osVersion[0].match(/[0-9].[0-9]/g);
		
		if ((osVersion == "5") ||(osVersion == "5.0")) // 2000
			osVersion = 1;
		else if (osVersion == "5.1") // XP
			osVersion = 2;
		else if (osVersion == "5.2") // XP x64
			osVersion = 3;
		else if ((osVersion == "6") || (osVersion == "6.0")) // Vista
			osVersion = 4;
		else if (osVersion == "6.1") // Win 7
			osVersion = 6;
		else
			osVersion = 0;

		if (osVersion == 4)
		{
			var x64 = false;
			
			if (userOS.match(/Wow64/gi))
				x64 = true;
			else if (userOS.match(/Win64/gi))
				x64 = true;
				
			if (x64 == true)
				osVersion = 5; // Vista x64
		}
		
		return osVersion;
	},

	getDefaultByRef : function ()
	{
		var ref = document.referrer.toString();
		
		for(key in this.refToAppid)
		{
			if (ref.indexOf(key) > 0)
			{
				var appid = this.refToAppid[key];
				
				this.setCookie("appid_dl", appid, this.COOKIE_EXPIRATION_DAYS, "/");
				return this.refToAppid[key];
			}
		}
		
		return null;
	},

	getIMWC : function (systemID)
	{
		if (systemID)
		{
			switch(systemID)
			{
				case 1:
				{
					if (typeof(IMIMWC) == "object")
						return IMIMWC;
				} 
				
				case 2:
				{
					if (typeof(BSIMWC) == "object")
						return BSIMWC;
				}
				
				case 3:
				{
					if (typeof(SHIMWC) == "object")
						return SHIMWC;
				}
				
				case 4:
				{
					if (typeof(LPIMWC) == "object")
						return LPIMWC;
				}
				
				default:
					return null;
			}
		}
		
		return null;
	},

	addListener : function (element, type, expression, bubbling)
	{
		bubbling = bubbling || false;
		
		if(window.addEventListener)	{ // Standard
			element.addEventListener(type, expression, bubbling);
			return true;
		} else if(window.attachEvent) { // IE
			element.attachEvent("on" + type, expression);
			return true;
		} else return false;
	},

	setAppID : function (defaultAppidID)
	{
		this.appID = this.getURLParam("appid");

		if (!this.appID)
		{
			this.appID = this.getDefaultByRef();
		}

		if (!this.appID)
		{
			this.appID = this.getCookie("appid_dl");
		}

		if (forceOrganicAppidTo !== null && (this.appID == null || this.isOrganicAppId(this.appID)))
		{
			this.appID = forceOrganicAppidTo;
		}
		if (forceAppidTo !== null)
		{
			this.appID = forceAppidTo;
		}

		if (!this.appID && defaultAppidID)
		{
			this.appID = defaultAppidID;
		}
	},

	setLpId : function(lpID)
	{
		this.lpID = lpID;
	},
		
	isOrganicAppId : function (appId)
	{
		return (appId >= 0 && appId < this.ORGANIC_APPID_THRESHOLD)
	},

	forceAppId : function (forceTo)
	{
		if (forceTo !== false)
			forceAppidTo = forceTo;
	},

	getAppID : function ()
	{
		return this.appID;
	},

	init : function (systemID, pHost, defaultAppidID, pSetClientInfo)
	{
		//init variables
		this.systemID = systemID;

		if (pHost)
			this.statisticsHost = pHost;

		if (pSetClientInfo)
		{
			var IMWC = this.getIMWC(this.systemID);
			
			if ((IMWC) && (typeof(IMWC) == "object"))
			{
				try
				{
					this.clientVersion = IMWC.getFullVersion()
					this.clientBuildNumber = this.clientVersion.split(".");
					this.clientBuildNumber = this.clientBuildNumber[this.clientBuildNumber.length - 1];
				}
				catch(e)
				{
				}
			}
			
			if (this.clientVersion)
			{
				if (this.clientVersion.length > 0)
					this.clientVersion = this.clientVersion.substr(0, 5);
			}
		}

		this.browserCode = this.getbrowserCode();
		try
		{
			this.browserLang = navigator.browserLanguage ? navigator.browserLanguage : navigator.language;
			this.browserLang = this.browserLang.substr(0, 2);
		}
		catch(e)
		{
		}

		this.osCode = this.getOSCode();

		//set the app ID
		this.setAppID(defaultAppidID);

		//set the appid_dl cookie with appid value
		if (this.appID)
		{
			this.setCookie("appid_dl", this.appID, this.COOKIE_EXPIRATION_DAYS, "/");
		}
	},

	track : function (eventType, clientLang, systemId)
	{
		if (!this.EVENT_TYPE_MAP[eventType])
			return;

		if (eventType == 'hit')
		{
			if (this.getCookie("appid_sh"))
			{
				return;
			}
			else
			{
				this.setCookie("appid_sh", "1", null);
			}
		}
		eventID = this.EVENT_TYPE_MAP[eventType]['eventId'];
		timeout = this.EVENT_TYPE_MAP[eventType]['eventTimeout'];

		if (!clientLang)
			clientLang = "";

		var path = this.statisticsHost + "/statistics/appid/wgimage.gif";
			path += "?appID=" + this.appID;
			if (this.lpID != null)
			{
				path += '&lpID=' + this.lpID;
			}
			path += "&systemID=" + (systemId ? systemId : this.systemID);
			path += "&eventID=" + eventID;
			path += "&browserTypeID=" + this.browserCode;
			//path += "&browserLanguageCode=" + this.browserLang; - from webgate.
			path += "&OSID=" + this.osCode;
			path += "&clientVersion=" + this.clientVersion;
			path += "&clientBuildNumber=" + this.clientBuildNumber;
			path += "&clientLanguageCode=" + clientLang;
			path += "&rand=" + Math.random();

		var executeCreateImage = function()
		{
			this.appidPixel = (typeof(Image) == "object") ? new Image(1, 1) : document.createElement('img');
			
			this.appidPixel.setAttribute('src', path);
			this.appidPixel.style.display = 'none';
		}

		if (timeout)
		{
			setTimeout(executeCreateImage, timeout);
		}
		else
		{
			executeCreateImage();
		}
	}
};