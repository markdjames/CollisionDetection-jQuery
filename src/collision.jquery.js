/***********************************
* Function written by Mark James | markjamesnet.co.uk
* Share and share-a-like - use, abuse and improve.
***********************************/
(function( $ ) {
	$.fn.collision = function (args) {
		var d = this;
		var smoothing = (args.smoothing==null) ? 0 : args.smoothing ;
		var i = 0;

		this.draggable({
			start: function() {
				args.start(d);
			},
			drag: function() {
				if (i==smoothing) {
					

					$(args.target).each(function() {
						t = $(this);
						dl = d.offset().left;
						dt = d.offset().top;
						dr = d.offset().left + d.innerWidth()
						db = d.offset().top + d.innerHeight()
						tl = t.offset().left;
						tr = t.offset().left+t.innerWidth();
						tt = t.offset().top;
						tb = t.offset().top+t.innerHeight();
						
						if (
							(
							// top left
							(dl > tl) && 
							(dl < tr)
							&&
							(dt > tt) && 
							(dt < tb)
							)
							||
							(
							// top right
							(dr > tl) && 
							(dr < tr)
							&&
							(dt > tt) && 
							(dt < tb)
							) 
							|| 
							(
							// bottom left
							(dl > tl) && 
							(dl < tr)
							&&
							(db > tt) && 
							(db < tb)
							)
							||
							(
							// bottom right
							(dr > tl) && 
							(dr < tr)
							&&
							(db > tt) && 
							(db < tb)
							)
							||
							(
							// top
							(dr > tr) && 
							(dl < tl)
							&&
							(dt > tt) && 
							(dt < tb)
							)
							||
							(
							// bottom
							(dr > tr) && 
							(dl < tl)
							&&
							(db < tb) && 
							(db > tt)
							)
							||
							(
							// right
							(dt < tt) && 
							(db > tb)
							&&
							(dr < tr) && 
							(dr > tl)
							)
							||
							(
							// left
							(dt < tt) && 
							(db > tb)
							&&
							(dl > tl) && 
							(dl < tr)
							)
						   ) {
							args.oncollide(t);
						} else {
							args.uncollide(t);
						}
					});
					i = 0;
				} else {
					i++;
				}
			},
			stop: function() {
				args.end(d);
			}
		});
	
  	};
})( jQuery );