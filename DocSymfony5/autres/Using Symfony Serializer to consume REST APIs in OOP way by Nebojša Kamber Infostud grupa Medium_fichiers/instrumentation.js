(self.webpackChunklite=self.webpackChunklite||[]).push([[118],{8538:(e,n,r)=>{"use strict";r.r(n),r.d(n,{default:()=>M});var t=r(94725),o=r(67294),i=r(12291),s=r(16528),a=r(72351),u=r(52837),c=r(61250),l=r(31235),f=r(31117),d=r(67297),v=r(67616),p=r(29035),g=r(63038),m=r.n(g),h=r(59713),_=r.n(h),b=r(44059),w=r(14034);function E(){for(var e=new w.y,n=arguments.length,r=new Array(n),t=0;t<n;t++)r[t]=arguments[t];if(0===r.length)return e;var o=r.map((function(){return[]}));return r.forEach((function(n,r){n.observe((function(n){o[r].push(n),o.every((function(e){return e.length>0}))&&e.set(o.map((function(e){return e.shift()})))}))})),e}var T=function(e){return function(n){return _()({},e,n)}};const M=function(){var e,n,r,g,h,_,w,M,P,A,S,y,C,k,L,O;return o.useEffect((function(){var e=E(v.sY,v.wZ,v.vY).map((function(e){var n=m()(e,3),r=n[0],t=n[1],o=n[2];return{responseEndToLCP:new v.jb(r.response.end,t.end),responseEndToFCP:new v.jb(r.response.end,o.end)}})),n=E(v.sY,v.qH.map(T("fid")),v.vY.map(T("fcp")),v.wZ.map(T("lcp")),e);v.cA.observe((function(e){e||n.observe((function(e){var n=e.reduce((function(e,n){return Object.assign(e,n)}),{}),r=Object.keys(n).reduce((function(e,r){var t=n[r].duration;return e[r]=t%1==0?t:Number(t.toFixed(1)),e}),{}),t=document.children[0],o={html:null==t?void 0:t.innerHTML.length,redux:JSON.stringify(window.__PRELOADED_STATE__).length,apollo:JSON.stringify(window.__APOLLO_STATE__).length};b.t.log("client hydrated",{perf:r,sizes:o})}))})),v.Df.observe((function(e){return b.t.log("client resource sizes",{resources:e})}))}),[]),e=(0,d.v)((function(e){return e.tracing})),n=e.originalSpan,r=e.tracer,g=(0,s.cD)(),h=g.loading,_=g.isBot,w=(0,d.v)((function(e){return e.client.routingEntity})),M=(0,d.v)((function(e){return e.auroraPage.isAuroraPageEnabled})),P=(0,s.rZ)(),A=P.loading,S=P.viewerId,y=(0,l.xg)(),C=(0,l.f$)(),k=(0,i.I0)(),L=(0,c.dh)(),O=(0,a.Av)(),o.useEffect((function(){var e;if(r&&O&&!h&&!_&&!A&&S){var o=L(window.location.pathname),i=null!==(e=null==o?void 0:o.route.metricName)&&void 0!==e?e:"unidentified",a=(0,s.QM)(S),c=(0,p.ic)(navigator.userAgent),l=[];y?l.push("edge_cache_enabled"):C&&l.push("edge_cache_control");var d=l.join(","),g={"user.logged_in":a,"user.experiment":d,"device.mobile_or_tablet":c,"req.route_name":i,"req.route":i,"req.router":(null==w?void 0:w.type)||u.Cr.DEFAULT},m={auroraPage:M,loggedIn:a,mobileOrTablet:c,experiment:d,route:i},b=function(e){return Math.round(1e3*e)},E=function(e,n,t,o){var i=t.start,s=t.end,a=r.startSpan("timing.".concat(n),{childOf:e,tags:g}).setBeginMicros(b(i)).setEndMicros(b(s));return null!=o&&o(a),a.finish(),a};v.sY.observe((function(e){var o,i,s,a;O.reportRender(m,e);var u=r.startSpan("timing.navigation",{references:n?[(0,t.followsFrom)(n)]:void 0,tags:g}).setBeginMicros(b(e.load.start)).setEndMicros(b(e.load.end)).log({redirect_count:null!==(o=null===(i=window)||void 0===i||null===(s=i.performance)||void 0===s||null===(a=s.navigation)||void 0===a?void 0:a.redirectCount)&&void 0!==o?o:0});E(u,"beforeDomainLookup",e.before_domain_lookup),E(u,"domainLookup",e.domain_lookup),E(u,"connect",e.connect),E(u,"request",e.request),E(u,"response",e.response),E(u,"processing",e.processing);var c=e.overall_fcp,l=e.client,d=e.render;null!=c&&E(u,"firstContentfulPaint",c),null!=l&&E(u,"client",l,(function(e){null!=d&&E(e,"render",d)})),u.finish(),k((0,f.YU)(u.generateTraceURL()))})),v.vY.observe((function(e){O.reportFirstContentfulPaint(m,e),r.startSpan("timing.firstContentfulPaint.v2",{references:n?[(0,t.followsFrom)(n)]:void 0,tags:g}).setBeginMicros(b(e.start)).setEndMicros(b(e.end)).finish()})),v.wZ.observe((function(e){O.reportLargestContentfulPaint(m,e),r.startSpan("timing.largestContentfulPaint",{references:n?[(0,t.followsFrom)(n)]:void 0,tags:g}).setBeginMicros(b(e.start)).setEndMicros(b(e.end)).finish()})),v.yI.observe((function(e){O.reportCumulativeLayoutShift(m,e)})),v.cA.observe((function(e){e&&O.reportUnsupportedPerfObserver(m)})),v.qH.observe((function(e){O.reportInput(m,e),r.startSpan("timing.input.first.delay",{references:n?[(0,t.followsFrom)(n)]:void 0,tags:g}).setBeginMicros(b(e.start)).setEndMicros(b(e.end)).finish()}))}}),[r,A,S,h,_]),null}},72864:(e,n,r)=>{"use strict";r.r(n),r.d(n,{init:()=>i,extractSpan:()=>s});var t=r(45573),o=r(94725),i=function(e){var n=e.name,r=e.host,i=e.token,s=e.appVersion,a=new t.Tracer({component_name:n,xhr_instrumentation:!1,access_token:i,collector_host:r,default_span_tags:{"component.version":s}});return(0,o.initGlobalTracer)(a),a},s=function(e,n){if(n)return e.extract(o.FORMAT_HTTP_HEADERS,n)}}}]);
//# sourceMappingURL=https://stats.medium.build/lite/sourcemaps/instrumentation.5722375f.chunk.js.map