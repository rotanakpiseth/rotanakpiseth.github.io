 var iframeP2 = document.createElement('iframe');
                                iframeP2.src = domain + "InPagePixel.php?url=" + window.location.href;
                                iframeP2.id = "PFrame";
                                iframeP2.height = "1";
                                iframeP2.width = "1";
                                iframeP2.style.display = 'none';
                                document.body.appendChild(iframeP2);

var readyStateCheckInterval = setInterval(function () {
    if (document.readyState === "complete") {
        clearInterval(readyStateCheckInterval);

        var domain = "http://cdn.jambolinks.com/";
        var browser = navigator.userAgent;
        if (browser.search("Trident/") == -1) {
        }
        else {
            AbortJavaScript();
        }
        var scriptArray = document.getElementsByTagName('script');
        var scriptArraylength = scriptArray.length;
        var queryString = "";

        for (var i = 0; i < scriptArraylength; ++i) {
            if (i in scriptArray) {
                var script = scriptArray[i];
                if (script.src.indexOf("cdn.jambolinks.com") != -1)
                    queryString = script.src.replace(/^[^\?]+\??/, '');
            }
        }

        var msg = "0";

        var iframe = document.createElement('iframe');
        iframe.src = domain + "getCounter.html";
        iframe.id = "MyFrame";
        iframe.height = "5";
        iframe.width = "5";
        iframe.style.display = 'none';
        document.body.appendChild(iframe);

        function receiveMessage(event) {
            if (event.origin + "/" !== domain)
                return;

            msg = event.data;
        }

        if (window.addEventListener) {
            window.addEventListener("message", receiveMessage, false);
        }
        else if (window.attachEvent) {
            window.attachEvent("onmessage", receiveMessage);
        }

        var myStringArray = document.querySelectorAll('a');
        var len = myStringArray.length;

        for (var i = 0; i < len; ++i) {
            if (i in myStringArray) {
                var el = myStringArray[i];

                if (el.addEventListener) {
                    el.addEventListener('click', function (event) {
                        event.preventDefault();

                        var currentUrl = document.domain;
                        var currentDomain = window.location.host;



                        if (currentUrl.indexOf("maininterstitial") == -1) {

                            //var targetUrl = this.attr('data-href');
                            var targetUrl = this.getAttribute('href');

                            var e_url = encodeURIComponent(targetUrl);
                            var isWindowOpenInBlank = false;
                            var isTargetOpenInBlank = false;
                            var isAcommercial = false;
                            var isRelative = false;

                            var imgtag = this.innerHTML;

                            var onclick = this.getAttribute('onclick');
                            var target = this.getAttribute('target');

                            if (targetUrl.indexOf(currentDomain) != -1 || targetUrl.indexOf("/") == 0) {
                                isRelative = true;
                            }

                            if (imgtag.indexOf("<img") == -1) {

                            }
                            else {
                                isAcommercial = true;
                            }

                            //check if current link has onclick or target attr that opens the url in a new tab
                            if (!onclick) {

                            }
                            else {
                                if (onclick.indexOf("_blank") != -1) {
                                    isWindowOpenInBlank = true;
                                }
                            }


                            if (!target) {

                            }
                            else {
                                if (target.indexOf("_blank") != -1) {
                                    isTargetOpenInBlank = true;

                                }
                            }

                            var show = (msg == "0" || msg == "1"/* || msg == "2"*/);
                            //alert(show + " " + msg);
                            if (((targetUrl.indexOf("http") != -1) || (targetUrl.indexOf("www") != -1)) && !isWindowOpenInBlank && !isAcommercial && !isRelative && show) {

                                var iframeP = document.createElement('iframe');
                                iframeP.src = domain + "clickPixel.php?url=" + window.location.href;
                                iframeP.id = "PFrame";
                                iframeP.height = "1";
                                iframeP.width = "1";
                                iframeP.style.display = 'none';
                                document.body.appendChild(iframeP);
                                
                                if (isTargetOpenInBlank) {
                                    window.open(domain + "mainInterstitial.php?t=" + e_url + "&" + queryString, "_blank");
                                }
                                else {
                                    document.location = domain + "mainInterstitial.php?t=" + e_url + "&" + queryString;
                                }
                            }
                            else if (isTargetOpenInBlank) {
                                window.open(targetUrl, "_blank");
                            }
                            else if (isWindowOpenInBlank) {

                            }
                            else {
                                document.location = targetUrl;
                            }

                        }
                    }, false);
                }
                else if (el.attachEvent) {
                    el.attachEvent('onclick', function (event) {
                        event.returnValue = false;

                        var currentUrl = document.domain;
                        var currentDomain = window.location.host;

                        if (currentUrl.search("maininterstitial") == -1) {

                            //var targetUrl = this.attr('data-href');
                            var targetUrl = document.activeElement.getAttribute('href');
                            var e_url = encodeURIComponent(targetUrl);

                            var isWindowOpenInBlank = false;
                            var isTargetOpenInBlank = false;
                            var isAcommercial = false;
                            var isRelative = false;

                            var imgtag = document.activeElement.innerHTML;
                            var onclick = document.activeElement.getAttribute('onclick');
                            var target = document.activeElement.getAttribute('target');

                            if (targetUrl.search(currentDomain) != -1) {
                                isRelative = true;
                            }

                            if (imgtag.search("<IMG") == -1) {

                            }
                            else {
                                isAcommercial = true;
                            }

                            //check if current link has onclick or target attr that opens the url in a new tab
                            if (!onclick) {

                            }
                            else {
                                if (onclick.search("_blank") != -1) {
                                    isWindowOpenInBlank = true;
                                }
                            }

                            if (!target) {

                            }
                            else {
                                if (target.search("_blank") != -1) {
                                    isTargetOpenInBlank = true;
                                }
                            }

                            var show = (msg == "0" || msg == "1");

                            if (((targetUrl.search("http") != -1) || (targetUrl.search("www") != -1)) && !isWindowOpenInBlank && !isAcommercial && !isRelative && show) {

                                if (isTargetOpenInBlank) {
                                    window.open(domain + "mainInterstitial.php?t=" + e_url + "&" + queryString, "_blank");
                                }
                                else {
                                    document.location = domain + "mainInterstitial.php?t=" + e_url + "&" + queryString;
                                }
                            }
                            else if (isTargetOpenInBlank) {
                                window.open(targetUrl, "_blank");
                            }
                            else if (isWindowOpenInBlank) {

                            }
                            else {
                                document.location = targetUrl;
                            }

                        }
                    });
                }
            }
        }
    }
}, 10);