(self.webpackChunk=self.webpackChunk||[]).push([[3266],{48457:function(e,t,r){"use strict";var n=r(49974),a=r(47908),i=r(53411),o=r(97659),s=r(17466),u=r(86135),c=r(71246);e.exports=function(e){var t,r,f,h,l,p,g=a(e),v="function"==typeof this?this:Array,m=arguments.length,d=m>1?arguments[1]:void 0,y=void 0!==d,w=c(g),b=0;if(y&&(d=n(d,m>2?arguments[2]:void 0,2)),null==w||v==Array&&o(w))for(r=new v(t=s(g.length));t>b;b++)p=y?d(g[b],b):g[b],u(r,b,p);else for(l=(h=w.call(g)).next,r=new v;!(f=l.call(h)).done;b++)p=y?i(h,d,[f.value,b],!0):f.value,u(r,b,p);return r.length=b,r}},53411:function(e,t,r){var n=r(19670),a=r(99212);e.exports=function(e,t,r,i){try{return i?t(n(r)[0],r[1]):t(r)}catch(t){throw a(e),t}}},84964:function(e,t,r){var n=r(5112)("match");e.exports=function(e){var t=/./;try{"/./"[e](t)}catch(r){try{return t[n]=!1,"/./"[e](t)}catch(e){}}return!1}},18554:function(e,t,r){var n=r(19670),a=r(71246);e.exports=function(e){var t=a(e);if("function"!=typeof t)throw TypeError(String(e)+" is not iterable");return n(t.call(e))}},79587:function(e,t,r){var n=r(70111),a=r(27674);e.exports=function(e,t,r){var i,o;return a&&"function"==typeof(i=t.constructor)&&i!==r&&n(o=i.prototype)&&o!==r.prototype&&a(e,o),e}},590:function(e,t,r){var n=r(47293),a=r(5112),i=r(31913),o=a("iterator");e.exports=!n((function(){var e=new URL("b?a=1&b=2&c=3","http://a"),t=e.searchParams,r="";return e.pathname="c%20d",t.forEach((function(e,n){t.delete("b"),r+=n+e})),i&&!e.toJSON||!t.sort||"http://a/c%20d?a=1&c=3"!==e.href||"3"!==t.get("c")||"a=1"!==String(new URLSearchParams("?a=1"))||!t[o]||"a"!==new URL("https://a@b").username||"b"!==new URLSearchParams(new URLSearchParams("a=b")).get("a")||"xn--e1aybc"!==new URL("http://тест").host||"#%D0%B1"!==new URL("http://a#б").hash||"a1c3"!==r||"x"!==new URL("http://x",void 0).host}))},3929:function(e,t,r){var n=r(47850);e.exports=function(e){if(n(e))throw TypeError("The method doesn't accept regular expressions");return e}},81150:function(e){e.exports=Object.is||function(e,t){return e===t?0!==e||1/e==1/t:e!=e&&t!=t}},33197:function(e){"use strict";var t=2147483647,r=/[^\0-\u007E]/,n=/[.\u3002\uFF0E\uFF61]/g,a="Overflow: input needs wider integers to process",i=Math.floor,o=String.fromCharCode,s=function(e){return e+22+75*(e<26)},u=function(e,t,r){var n=0;for(e=r?i(e/700):e>>1,e+=i(e/t);e>455;n+=36)e=i(e/35);return i(n+36*e/(e+38))},c=function(e){var r,n,c=[],f=(e=function(e){for(var t=[],r=0,n=e.length;r<n;){var a=e.charCodeAt(r++);if(a>=55296&&a<=56319&&r<n){var i=e.charCodeAt(r++);56320==(64512&i)?t.push(((1023&a)<<10)+(1023&i)+65536):(t.push(a),r--)}else t.push(a)}return t}(e)).length,h=128,l=0,p=72;for(r=0;r<e.length;r++)(n=e[r])<128&&c.push(o(n));var g=c.length,v=g;for(g&&c.push("-");v<f;){var m=t;for(r=0;r<e.length;r++)(n=e[r])>=h&&n<m&&(m=n);var d=v+1;if(m-h>i((t-l)/d))throw RangeError(a);for(l+=(m-h)*d,h=m,r=0;r<e.length;r++){if((n=e[r])<h&&++l>t)throw RangeError(a);if(n==h){for(var y=l,w=36;;w+=36){var b=w<=p?1:w>=p+26?26:w-p;if(y<b)break;var R=y-b,k=36-b;c.push(o(s(b+R%k))),y=i(R/k)}c.push(o(s(y))),p=u(l,d,v==g),l=0,++v}}++l,++h}return c.join("")};e.exports=function(e){var t,a,i=[],o=e.toLowerCase().replace(n,".").split(".");for(t=0;t<o.length;t++)a=o[t],i.push(r.test(a)?"xn--"+c(a):a);return i.join(".")}},53111:function(e,t,r){var n=r(84488),a="["+r(81361)+"]",i=RegExp("^"+a+a+"*"),o=RegExp(a+a+"*$"),s=function(e){return function(t){var r=String(n(t));return 1&e&&(r=r.replace(i,"")),2&e&&(r=r.replace(o,"")),r}};e.exports={start:s(1),end:s(2),trim:s(3)}},81361:function(e){e.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},68309:function(e,t,r){var n=r(19781),a=r(3070).f,i=Function.prototype,o=i.toString,s=/^\s*function ([^ (]*)/,u="name";n&&!(u in i)&&a(i,u,{configurable:!0,get:function(){try{return o.call(this).match(s)[1]}catch(e){return""}}})},9653:function(e,t,r){"use strict";var n=r(19781),a=r(17854),i=r(54705),o=r(31320),s=r(86656),u=r(84326),c=r(79587),f=r(57593),h=r(47293),l=r(70030),p=r(8006).f,g=r(31236).f,v=r(3070).f,m=r(53111).trim,d="Number",y=a.Number,w=y.prototype,b=u(l(w))==d,R=function(e){var t,r,n,a,i,o,s,u,c=f(e,!1);if("string"==typeof c&&c.length>2)if(43===(t=(c=m(c)).charCodeAt(0))||45===t){if(88===(r=c.charCodeAt(2))||120===r)return NaN}else if(48===t){switch(c.charCodeAt(1)){case 66:case 98:n=2,a=49;break;case 79:case 111:n=8,a=55;break;default:return+c}for(o=(i=c.slice(2)).length,s=0;s<o;s++)if((u=i.charCodeAt(s))<48||u>a)return NaN;return parseInt(i,n)}return+c};if(i(d,!y(" 0o1")||!y("0b1")||y("+0x1"))){for(var k,L=function(e){var t=arguments.length<1?0:e,r=this;return r instanceof L&&(b?h((function(){w.valueOf.call(r)})):u(r)!=d)?c(new y(R(t)),r,L):R(t)},A=n?p(y):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger,fromString,range".split(","),U=0;A.length>U;U++)s(y,k=A[U])&&!s(L,k)&&v(L,k,g(y,k));L.prototype=w,w.constructor=L,o(a,d,L)}},64765:function(e,t,r){"use strict";var n=r(27007),a=r(19670),i=r(84488),o=r(81150),s=r(97651);n("search",1,(function(e,t,r){return[function(t){var r=i(this),n=null==t?void 0:t[e];return void 0!==n?n.call(t,r):new RegExp(t)[e](String(r))},function(e){var n=r(t,e,this);if(n.done)return n.value;var i=a(e),u=String(this),c=i.lastIndex;o(c,0)||(i.lastIndex=0);var f=s(i,u);return o(i.lastIndex,c)||(i.lastIndex=c),null===f?-1:f.index}]}))},41637:function(e,t,r){"use strict";r(66992);var n=r(82109),a=r(35005),i=r(590),o=r(31320),s=r(12248),u=r(58003),c=r(24994),f=r(29909),h=r(25787),l=r(86656),p=r(49974),g=r(70648),v=r(19670),m=r(70111),d=r(70030),y=r(79114),w=r(18554),b=r(71246),R=r(5112),k=a("fetch"),L=a("Headers"),A=R("iterator"),U="URLSearchParams",S="URLSearchParamsIterator",I=f.set,x=f.getterFor(U),E=f.getterFor(S),q=/\+/g,B=Array(4),N=function(e){return B[e-1]||(B[e-1]=RegExp("((?:%[\\da-f]{2}){"+e+"})","gi"))},P=function(e){try{return decodeURIComponent(e)}catch(t){return e}},C=function(e){var t=e.replace(q," "),r=4;try{return decodeURIComponent(t)}catch(e){for(;r;)t=t.replace(N(r--),P);return t}},F=/[!'()~]|%20/g,j={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+"},T=function(e){return j[e]},O=function(e){return encodeURIComponent(e).replace(F,T)},_=function(e,t){if(t)for(var r,n,a=t.split("&"),i=0;i<a.length;)(r=a[i++]).length&&(n=r.split("="),e.push({key:C(n.shift()),value:C(n.join("="))}))},M=function(e){this.entries.length=0,_(this.entries,e)},$=function(e,t){if(e<t)throw TypeError("Not enough arguments")},D=c((function(e,t){I(this,{type:S,iterator:w(x(e).entries),kind:t})}),"Iterator",(function(){var e=E(this),t=e.kind,r=e.iterator.next(),n=r.value;return r.done||(r.value="keys"===t?n.key:"values"===t?n.value:[n.key,n.value]),r})),V=function(){h(this,V,U);var e,t,r,n,a,i,o,s,u,c=arguments.length>0?arguments[0]:void 0,f=this,p=[];if(I(f,{type:U,entries:p,updateURL:function(){},updateSearchParams:M}),void 0!==c)if(m(c))if("function"==typeof(e=b(c)))for(r=(t=e.call(c)).next;!(n=r.call(t)).done;){if((o=(i=(a=w(v(n.value))).next).call(a)).done||(s=i.call(a)).done||!i.call(a).done)throw TypeError("Expected sequence with length 2");p.push({key:o.value+"",value:s.value+""})}else for(u in c)l(c,u)&&p.push({key:u,value:c[u]+""});else _(p,"string"==typeof c?"?"===c.charAt(0)?c.slice(1):c:c+"")},G=V.prototype;s(G,{append:function(e,t){$(arguments.length,2);var r=x(this);r.entries.push({key:e+"",value:t+""}),r.updateURL()},delete:function(e){$(arguments.length,1);for(var t=x(this),r=t.entries,n=e+"",a=0;a<r.length;)r[a].key===n?r.splice(a,1):a++;t.updateURL()},get:function(e){$(arguments.length,1);for(var t=x(this).entries,r=e+"",n=0;n<t.length;n++)if(t[n].key===r)return t[n].value;return null},getAll:function(e){$(arguments.length,1);for(var t=x(this).entries,r=e+"",n=[],a=0;a<t.length;a++)t[a].key===r&&n.push(t[a].value);return n},has:function(e){$(arguments.length,1);for(var t=x(this).entries,r=e+"",n=0;n<t.length;)if(t[n++].key===r)return!0;return!1},set:function(e,t){$(arguments.length,1);for(var r,n=x(this),a=n.entries,i=!1,o=e+"",s=t+"",u=0;u<a.length;u++)(r=a[u]).key===o&&(i?a.splice(u--,1):(i=!0,r.value=s));i||a.push({key:o,value:s}),n.updateURL()},sort:function(){var e,t,r,n=x(this),a=n.entries,i=a.slice();for(a.length=0,r=0;r<i.length;r++){for(e=i[r],t=0;t<r;t++)if(a[t].key>e.key){a.splice(t,0,e);break}t===r&&a.push(e)}n.updateURL()},forEach:function(e){for(var t,r=x(this).entries,n=p(e,arguments.length>1?arguments[1]:void 0,3),a=0;a<r.length;)n((t=r[a++]).value,t.key,this)},keys:function(){return new D(this,"keys")},values:function(){return new D(this,"values")},entries:function(){return new D(this,"entries")}},{enumerable:!0}),o(G,A,G.entries),o(G,"toString",(function(){for(var e,t=x(this).entries,r=[],n=0;n<t.length;)e=t[n++],r.push(O(e.key)+"="+O(e.value));return r.join("&")}),{enumerable:!0}),u(V,U),n({global:!0,forced:!i},{URLSearchParams:V}),i||"function"!=typeof k||"function"!=typeof L||n({global:!0,enumerable:!0,forced:!0},{fetch:function(e){var t,r,n,a=[e];return arguments.length>1&&(m(t=arguments[1])&&(r=t.body,g(r)===U&&((n=t.headers?new L(t.headers):new L).has("content-type")||n.set("content-type","application/x-www-form-urlencoded;charset=UTF-8"),t=d(t,{body:y(0,String(r)),headers:y(0,n)}))),a.push(t)),k.apply(this,a)}}),e.exports={URLSearchParams:V,getState:x}},60285:function(e,t,r){"use strict";r(78783);var n,a=r(82109),i=r(19781),o=r(590),s=r(17854),u=r(36048),c=r(31320),f=r(25787),h=r(86656),l=r(21574),p=r(48457),g=r(28710).codeAt,v=r(33197),m=r(58003),d=r(41637),y=r(29909),w=s.URL,b=d.URLSearchParams,R=d.getState,k=y.set,L=y.getterFor("URL"),A=Math.floor,U=Math.pow,S="Invalid scheme",I="Invalid host",x="Invalid port",E=/[A-Za-z]/,q=/[\d+-.A-Za-z]/,B=/\d/,N=/^(0x|0X)/,P=/^[0-7]+$/,C=/^\d+$/,F=/^[\dA-Fa-f]+$/,j=/[\u0000\u0009\u000A\u000D #%/:?@[\\]]/,T=/[\u0000\u0009\u000A\u000D #/:?@[\\]]/,O=/^[\u0000-\u001F ]+|[\u0000-\u001F ]+$/g,_=/[\u0009\u000A\u000D]/g,M=function(e,t){var r,n,a;if("["==t.charAt(0)){if("]"!=t.charAt(t.length-1))return I;if(!(r=D(t.slice(1,-1))))return I;e.host=r}else if(H(e)){if(t=v(t),j.test(t))return I;if(null===(r=$(t)))return I;e.host=r}else{if(T.test(t))return I;for(r="",n=p(t),a=0;a<n.length;a++)r+=Y(n[a],G);e.host=r}},$=function(e){var t,r,n,a,i,o,s,u=e.split(".");if(u.length&&""==u[u.length-1]&&u.pop(),(t=u.length)>4)return e;for(r=[],n=0;n<t;n++){if(""==(a=u[n]))return e;if(i=10,a.length>1&&"0"==a.charAt(0)&&(i=N.test(a)?16:8,a=a.slice(8==i?1:2)),""===a)o=0;else{if(!(10==i?C:8==i?P:F).test(a))return e;o=parseInt(a,i)}r.push(o)}for(n=0;n<t;n++)if(o=r[n],n==t-1){if(o>=U(256,5-t))return null}else if(o>255)return null;for(s=r.pop(),n=0;n<r.length;n++)s+=r[n]*U(256,3-n);return s},D=function(e){var t,r,n,a,i,o,s,u=[0,0,0,0,0,0,0,0],c=0,f=null,h=0,l=function(){return e.charAt(h)};if(":"==l()){if(":"!=e.charAt(1))return;h+=2,f=++c}for(;l();){if(8==c)return;if(":"!=l()){for(t=r=0;r<4&&F.test(l());)t=16*t+parseInt(l(),16),h++,r++;if("."==l()){if(0==r)return;if(h-=r,c>6)return;for(n=0;l();){if(a=null,n>0){if(!("."==l()&&n<4))return;h++}if(!B.test(l()))return;for(;B.test(l());){if(i=parseInt(l(),10),null===a)a=i;else{if(0==a)return;a=10*a+i}if(a>255)return;h++}u[c]=256*u[c]+a,2!=++n&&4!=n||c++}if(4!=n)return;break}if(":"==l()){if(h++,!l())return}else if(l())return;u[c++]=t}else{if(null!==f)return;h++,f=++c}}if(null!==f)for(o=c-f,c=7;0!=c&&o>0;)s=u[c],u[c--]=u[f+o-1],u[f+--o]=s;else if(8!=c)return;return u},V=function(e){var t,r,n,a;if("number"==typeof e){for(t=[],r=0;r<4;r++)t.unshift(e%256),e=A(e/256);return t.join(".")}if("object"==typeof e){for(t="",n=function(e){for(var t=null,r=1,n=null,a=0,i=0;i<8;i++)0!==e[i]?(a>r&&(t=n,r=a),n=null,a=0):(null===n&&(n=i),++a);return a>r&&(t=n,r=a),t}(e),r=0;r<8;r++)a&&0===e[r]||(a&&(a=!1),n===r?(t+=r?":":"::",a=!0):(t+=e[r].toString(16),r<7&&(t+=":")));return"["+t+"]"}return e},G={},X=l({},G,{" ":1,'"':1,"<":1,">":1,"`":1}),z=l({},X,{"#":1,"?":1,"{":1,"}":1}),J=l({},z,{"/":1,":":1,";":1,"=":1,"@":1,"[":1,"\\":1,"]":1,"^":1,"|":1}),Y=function(e,t){var r=g(e,0);return r>32&&r<127&&!h(t,e)?e:encodeURIComponent(e)},Z={ftp:21,file:null,http:80,https:443,ws:80,wss:443},H=function(e){return h(Z,e.scheme)},K=function(e){return""!=e.username||""!=e.password},Q=function(e){return!e.host||e.cannotBeABaseURL||"file"==e.scheme},W=function(e,t){var r;return 2==e.length&&E.test(e.charAt(0))&&(":"==(r=e.charAt(1))||!t&&"|"==r)},ee=function(e){var t;return e.length>1&&W(e.slice(0,2))&&(2==e.length||"/"===(t=e.charAt(2))||"\\"===t||"?"===t||"#"===t)},te=function(e){var t=e.path,r=t.length;!r||"file"==e.scheme&&1==r&&W(t[0],!0)||t.pop()},re=function(e){return"."===e||"%2e"===e.toLowerCase()},ne={},ae={},ie={},oe={},se={},ue={},ce={},fe={},he={},le={},pe={},ge={},ve={},me={},de={},ye={},we={},be={},Re={},ke={},Le={},Ae=function(e,t,r,a){var i,o,s,u,c,f=r||ne,l=0,g="",v=!1,m=!1,d=!1;for(r||(e.scheme="",e.username="",e.password="",e.host=null,e.port=null,e.path=[],e.query=null,e.fragment=null,e.cannotBeABaseURL=!1,t=t.replace(O,"")),t=t.replace(_,""),i=p(t);l<=i.length;){switch(o=i[l],f){case ne:if(!o||!E.test(o)){if(r)return S;f=ie;continue}g+=o.toLowerCase(),f=ae;break;case ae:if(o&&(q.test(o)||"+"==o||"-"==o||"."==o))g+=o.toLowerCase();else{if(":"!=o){if(r)return S;g="",f=ie,l=0;continue}if(r&&(H(e)!=h(Z,g)||"file"==g&&(K(e)||null!==e.port)||"file"==e.scheme&&!e.host))return;if(e.scheme=g,r)return void(H(e)&&Z[e.scheme]==e.port&&(e.port=null));g="","file"==e.scheme?f=me:H(e)&&a&&a.scheme==e.scheme?f=oe:H(e)?f=fe:"/"==i[l+1]?(f=se,l++):(e.cannotBeABaseURL=!0,e.path.push(""),f=Re)}break;case ie:if(!a||a.cannotBeABaseURL&&"#"!=o)return S;if(a.cannotBeABaseURL&&"#"==o){e.scheme=a.scheme,e.path=a.path.slice(),e.query=a.query,e.fragment="",e.cannotBeABaseURL=!0,f=Le;break}f="file"==a.scheme?me:ue;continue;case oe:if("/"!=o||"/"!=i[l+1]){f=ue;continue}f=he,l++;break;case se:if("/"==o){f=le;break}f=be;continue;case ue:if(e.scheme=a.scheme,o==n)e.username=a.username,e.password=a.password,e.host=a.host,e.port=a.port,e.path=a.path.slice(),e.query=a.query;else if("/"==o||"\\"==o&&H(e))f=ce;else if("?"==o)e.username=a.username,e.password=a.password,e.host=a.host,e.port=a.port,e.path=a.path.slice(),e.query="",f=ke;else{if("#"!=o){e.username=a.username,e.password=a.password,e.host=a.host,e.port=a.port,e.path=a.path.slice(),e.path.pop(),f=be;continue}e.username=a.username,e.password=a.password,e.host=a.host,e.port=a.port,e.path=a.path.slice(),e.query=a.query,e.fragment="",f=Le}break;case ce:if(!H(e)||"/"!=o&&"\\"!=o){if("/"!=o){e.username=a.username,e.password=a.password,e.host=a.host,e.port=a.port,f=be;continue}f=le}else f=he;break;case fe:if(f=he,"/"!=o||"/"!=g.charAt(l+1))continue;l++;break;case he:if("/"!=o&&"\\"!=o){f=le;continue}break;case le:if("@"==o){v&&(g="%40"+g),v=!0,s=p(g);for(var y=0;y<s.length;y++){var w=s[y];if(":"!=w||d){var b=Y(w,J);d?e.password+=b:e.username+=b}else d=!0}g=""}else if(o==n||"/"==o||"?"==o||"#"==o||"\\"==o&&H(e)){if(v&&""==g)return"Invalid authority";l-=p(g).length+1,g="",f=pe}else g+=o;break;case pe:case ge:if(r&&"file"==e.scheme){f=ye;continue}if(":"!=o||m){if(o==n||"/"==o||"?"==o||"#"==o||"\\"==o&&H(e)){if(H(e)&&""==g)return I;if(r&&""==g&&(K(e)||null!==e.port))return;if(u=M(e,g))return u;if(g="",f=we,r)return;continue}"["==o?m=!0:"]"==o&&(m=!1),g+=o}else{if(""==g)return I;if(u=M(e,g))return u;if(g="",f=ve,r==ge)return}break;case ve:if(!B.test(o)){if(o==n||"/"==o||"?"==o||"#"==o||"\\"==o&&H(e)||r){if(""!=g){var R=parseInt(g,10);if(R>65535)return x;e.port=H(e)&&R===Z[e.scheme]?null:R,g=""}if(r)return;f=we;continue}return x}g+=o;break;case me:if(e.scheme="file","/"==o||"\\"==o)f=de;else{if(!a||"file"!=a.scheme){f=be;continue}if(o==n)e.host=a.host,e.path=a.path.slice(),e.query=a.query;else if("?"==o)e.host=a.host,e.path=a.path.slice(),e.query="",f=ke;else{if("#"!=o){ee(i.slice(l).join(""))||(e.host=a.host,e.path=a.path.slice(),te(e)),f=be;continue}e.host=a.host,e.path=a.path.slice(),e.query=a.query,e.fragment="",f=Le}}break;case de:if("/"==o||"\\"==o){f=ye;break}a&&"file"==a.scheme&&!ee(i.slice(l).join(""))&&(W(a.path[0],!0)?e.path.push(a.path[0]):e.host=a.host),f=be;continue;case ye:if(o==n||"/"==o||"\\"==o||"?"==o||"#"==o){if(!r&&W(g))f=be;else if(""==g){if(e.host="",r)return;f=we}else{if(u=M(e,g))return u;if("localhost"==e.host&&(e.host=""),r)return;g="",f=we}continue}g+=o;break;case we:if(H(e)){if(f=be,"/"!=o&&"\\"!=o)continue}else if(r||"?"!=o)if(r||"#"!=o){if(o!=n&&(f=be,"/"!=o))continue}else e.fragment="",f=Le;else e.query="",f=ke;break;case be:if(o==n||"/"==o||"\\"==o&&H(e)||!r&&("?"==o||"#"==o)){if(".."===(c=(c=g).toLowerCase())||"%2e."===c||".%2e"===c||"%2e%2e"===c?(te(e),"/"==o||"\\"==o&&H(e)||e.path.push("")):re(g)?"/"==o||"\\"==o&&H(e)||e.path.push(""):("file"==e.scheme&&!e.path.length&&W(g)&&(e.host&&(e.host=""),g=g.charAt(0)+":"),e.path.push(g)),g="","file"==e.scheme&&(o==n||"?"==o||"#"==o))for(;e.path.length>1&&""===e.path[0];)e.path.shift();"?"==o?(e.query="",f=ke):"#"==o&&(e.fragment="",f=Le)}else g+=Y(o,z);break;case Re:"?"==o?(e.query="",f=ke):"#"==o?(e.fragment="",f=Le):o!=n&&(e.path[0]+=Y(o,G));break;case ke:r||"#"!=o?o!=n&&("'"==o&&H(e)?e.query+="%27":e.query+="#"==o?"%23":Y(o,G)):(e.fragment="",f=Le);break;case Le:o!=n&&(e.fragment+=Y(o,X))}l++}},Ue=function(e){var t,r,n=f(this,Ue,"URL"),a=arguments.length>1?arguments[1]:void 0,o=String(e),s=k(n,{type:"URL"});if(void 0!==a)if(a instanceof Ue)t=L(a);else if(r=Ae(t={},String(a)))throw TypeError(r);if(r=Ae(s,o,null,t))throw TypeError(r);var u=s.searchParams=new b,c=R(u);c.updateSearchParams(s.query),c.updateURL=function(){s.query=String(u)||null},i||(n.href=Ie.call(n),n.origin=xe.call(n),n.protocol=Ee.call(n),n.username=qe.call(n),n.password=Be.call(n),n.host=Ne.call(n),n.hostname=Pe.call(n),n.port=Ce.call(n),n.pathname=Fe.call(n),n.search=je.call(n),n.searchParams=Te.call(n),n.hash=Oe.call(n))},Se=Ue.prototype,Ie=function(){var e=L(this),t=e.scheme,r=e.username,n=e.password,a=e.host,i=e.port,o=e.path,s=e.query,u=e.fragment,c=t+":";return null!==a?(c+="//",K(e)&&(c+=r+(n?":"+n:"")+"@"),c+=V(a),null!==i&&(c+=":"+i)):"file"==t&&(c+="//"),c+=e.cannotBeABaseURL?o[0]:o.length?"/"+o.join("/"):"",null!==s&&(c+="?"+s),null!==u&&(c+="#"+u),c},xe=function(){var e=L(this),t=e.scheme,r=e.port;if("blob"==t)try{return new URL(t.path[0]).origin}catch(e){return"null"}return"file"!=t&&H(e)?t+"://"+V(e.host)+(null!==r?":"+r:""):"null"},Ee=function(){return L(this).scheme+":"},qe=function(){return L(this).username},Be=function(){return L(this).password},Ne=function(){var e=L(this),t=e.host,r=e.port;return null===t?"":null===r?V(t):V(t)+":"+r},Pe=function(){var e=L(this).host;return null===e?"":V(e)},Ce=function(){var e=L(this).port;return null===e?"":String(e)},Fe=function(){var e=L(this),t=e.path;return e.cannotBeABaseURL?t[0]:t.length?"/"+t.join("/"):""},je=function(){var e=L(this).query;return e?"?"+e:""},Te=function(){return L(this).searchParams},Oe=function(){var e=L(this).fragment;return e?"#"+e:""},_e=function(e,t){return{get:e,set:t,configurable:!0,enumerable:!0}};if(i&&u(Se,{href:_e(Ie,(function(e){var t=L(this),r=String(e),n=Ae(t,r);if(n)throw TypeError(n);R(t.searchParams).updateSearchParams(t.query)})),origin:_e(xe),protocol:_e(Ee,(function(e){var t=L(this);Ae(t,String(e)+":",ne)})),username:_e(qe,(function(e){var t=L(this),r=p(String(e));if(!Q(t)){t.username="";for(var n=0;n<r.length;n++)t.username+=Y(r[n],J)}})),password:_e(Be,(function(e){var t=L(this),r=p(String(e));if(!Q(t)){t.password="";for(var n=0;n<r.length;n++)t.password+=Y(r[n],J)}})),host:_e(Ne,(function(e){var t=L(this);t.cannotBeABaseURL||Ae(t,String(e),pe)})),hostname:_e(Pe,(function(e){var t=L(this);t.cannotBeABaseURL||Ae(t,String(e),ge)})),port:_e(Ce,(function(e){var t=L(this);Q(t)||(""==(e=String(e))?t.port=null:Ae(t,e,ve))})),pathname:_e(Fe,(function(e){var t=L(this);t.cannotBeABaseURL||(t.path=[],Ae(t,e+"",we))})),search:_e(je,(function(e){var t=L(this);""==(e=String(e))?t.query=null:("?"==e.charAt(0)&&(e=e.slice(1)),t.query="",Ae(t,e,ke)),R(t.searchParams).updateSearchParams(t.query)})),searchParams:_e(Te),hash:_e(Oe,(function(e){var t=L(this);""!=(e=String(e))?("#"==e.charAt(0)&&(e=e.slice(1)),t.fragment="",Ae(t,e,Le)):t.fragment=null}))}),c(Se,"toJSON",(function(){return Ie.call(this)}),{enumerable:!0}),c(Se,"toString",(function(){return Ie.call(this)}),{enumerable:!0}),w){var Me=w.createObjectURL,$e=w.revokeObjectURL;Me&&c(Ue,"createObjectURL",(function(e){return Me.apply(w,arguments)})),$e&&c(Ue,"revokeObjectURL",(function(e){return $e.apply(w,arguments)}))}m(Ue,"URL"),a({global:!0,forced:!o,sham:!i},{URL:Ue})}}]);