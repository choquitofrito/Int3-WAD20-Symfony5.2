"use strict";var StackExchange;!function(e){var t;!function(t){var n;!function(t){function n(t,n,r,o){var i;e.using("gps",function(){document.addEventListener("copy",function(a){var s,c=a.target;if(c!=i){i=c;for(var l,u,d,f=a.composedPath(),p=f.filter(function(e){return e instanceof HTMLElement}),h=!1,g=!1,m=0;m<p.length;m++){var v=p[m];(null===(s=v.classList)||void 0===s?void 0:s.contains("js-post-body"))&&(l=v),(v.dataset.answerid||v.dataset.questionid)&&(u=v),v.classList.contains("js-comment")&&(h=!0,d=v),"CODE"==v.tagName&&(g=!0)}var b=void 0!==l&&void 0!==u;if(h){var y=parseInt(d.dataset.commentId,10),$=parseInt(d.dataset.commentOwnerId,10),S=parseInt(d.dataset.commentScore,10),w=parseInt(u.dataset.answerid||u.dataset.questionid,10),k=parseInt(u.dataset.ownerid),x={"CommentId":y,"CommentOwnerId":$,"CommentScore":S,"IsCodeBlock":g,"CopyUserReputation":n,"ParentPostId":w,"ParentPostOwnerId":k,"Tags":t,"Referrer":document.referrer};e.gps.track("client_copy.comment",x)}else if(b){var C=parseInt(u.dataset.answerid||u.dataset.questionid,10),j=parseInt(u.dataset.ownerid,10),E=parseInt(u.dataset.score,10),P=u.classList.contains("question")?1:2,O=u.classList.contains("accepted-answer"),T={"PostId":C,"PostOwnerId":j,"PostType":P,"PostScore":E,"PostIsAccepted":O,"IsCodeBlock":g,"CopyUserReputation":n,"ParentPostId":r,"ParentPostOwnerId":o,"Tags":t,"Referrer":document.referrer};e.gps.track("client_copy.post",T)}}})})}t.addCopyEventListeners=n}(n=t.copy||(t.copy={}))}(t=e.misc||(e.misc={}))}(StackExchange||(StackExchange={}));