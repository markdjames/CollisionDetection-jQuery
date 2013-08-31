<script src="../src/collision.jquery.min.js"></script>
<style>
body {
	margin:0;
}
#drag_text {
	position:absolute;
	top:0px;
	right:180px;
	font-size:30px;
}
#square {
	position:absolute;
	top:150px;
	right:200px;
	border:2px solid #000;
	width:100px;
	height:100px;
	background-color:#00FF00;
	z-index:2;
	text-align:center;
	cursor:move;
}
.circle {
	position:absolute;
	right:50px;
	border:2px solid #000;
	width:50px;
	height:50px;
	border-radius:25px;
	background-color:#F00;
}
.dragging {
	background-color:#000;
	box-shadow:10px 10px 10px #000;
}
</style>
<div id='sandbox'>
	<div id='sandbox_inner'>
    <pre>
    $('#square').collision({
        
        /**
         * pass any valid jquery selector
         */
        target:'.circle',
        
        /**
         * increase the number if you're suffering performance problems
         */
        smoothing:5,
    </pre>
    <pre id='start' class='highlight'>
        /**
         * function called when element is 'picked up' - passes element
         */
        start:function(elem) {
            elem.addClass('dragging');
        },
    </pre>
    <pre id='end' class='highlight'>
        /**
         * function called when element is 'put down' - passes element
         */
        end:function(elem) {
            elem.removeClass('dragging');
        },
    </pre>
    <pre id='collide' class='highlight'>
        /**
         * function called when one of the targets is called - argument is the element that has been 'hit'
         */
        oncollide: function(elem) {
            elem.css('backgroundColor', '#fff');
        },
    </pre>
    <pre id='uncollide' class='highlight'>
        /**
         * function called when no target is hit
         */
        uncollide: function(elem) {
            elem.css('backgroundColor', '#F00');
        }
    </pre>
    <pre>
    });
    </pre>
    <p id='drag_text'>
    Drag the square<br />over the red dots
    </p>
    <div id='square'>
    </div>
    <div class='circle' style='top:30px;'>
    </div>
    <div class='circle' style='top:100px;'>
    </div>
    <div class='circle' style='top:170px;'>
    </div>
    <div class='circle' style='top:240px;'>
    </div>
    <div class='circle' style='top:310px;'>
    </div>
    
    
    <script>
    $(function() {
        $('#square').collision({
            
            /**
             * pass any valid jquery selector
             */
            target:'.circle',
            
            /**
             * increase the number if you're suffering performance problems
             */
            smoothing:5,
            
            /**
             * function called when element is 'picked up' - passes element
             */
            start:function(elem) {
                elem.addClass('dragging');
                highlight('start');
            },
            
            /**
             * function called when element is 'put down' - passes element
             */
            end:function(elem) {
                elem.removeClass('dragging');
                highlight('end');
            },
            
            /**
             * function called when one of the targets is called - argument is the element that has been 'hit'
             */
            oncollide: function(elem) {
                elem.css('backgroundColor', '#fff');
                highlight('collide');
            },
            
            /**
             * function called when no target is hit
             */
            uncollide: function(elem) {
                elem.css('backgroundColor', '#F00');
                highlight('uncollide');
            }
        });
    });
    
    function highlight(id) {
        $('#'+id).stop(true);
        $('#'+id).animate({
            color:'red'
        }, function() {
            $('#'+id).animate({
                color:'black'
            });
        });
    }
    </script>
    </div>
</div>
<div id='preview'>
	<p>Click here to<br />Preview</p>
</div>
<article>
	<h2>A simple, light-weight jQuery plugin to enable collision detection between HTML elements.</h2>
    <p>Features include:</p>
    <ul>
    	<li>Feedback functions let you add your own functionality each step of the way</li>
        <li>Smoothing: You decide how often you want the detection to occur - useful for more demanding applications</li>
        <li>Minified version is less than 1kb</li>
        <li style='color:red'>Requires jQuery UI</li>
    </ul>
    <p>This is essentially an addition to the jQuery UI Dragging functionality. See the preview above to see how simple it is!</p>
    <p><strong>How to Use</strong></p>
    <p>All you need to do is make sure you have included jQuery and jQuery UI in to your page then include collision.jquery.js afterwards.<br  />Now all you need to do to make a collision detection pairing is initialize the function as shown in the preview!</p>
    
    <p style='font-size:14px; margin-top:30px'><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_GB"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">jQuery Collision Detection</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_GB">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</p>
    
</article>