
if(window.addEventListener) {
    window.addEventListener('load', function () {
        var canvas, context, tool;

        function init () {
            canvas = document.getElementById('imageView');
            if (!canvas) {
                alert('Error: I cannot find the canvas element!');
                return;
            }

            if (!canvas.getContext) {
                alert('Error: no canvas.getContext!');
                return;
            }

            context = canvas.getContext('2d');
            if (!context) {
                alert('Error: failed to getContext!');
                return;
            }

            tool = new tool_pencil();

            canvas.addEventListener('mousedown', ev_canvas, false);
            canvas.addEventListener('mousemove', ev_canvas, false);
            canvas.addEventListener('mouseup',   ev_canvas, false);
        }

        function tool_pencil () {
            var start, end;
            time = 0.0;
            var tool = this;
            this.started = false;

            this.mousedown = function (ev) {
                start = new Date().getTime();
                context.beginPath();
                context.moveTo(ev._x, ev._y);
                tool.started = true;
            };

            this.mousemove = function (ev) {
                if (tool.started) {
                    context.lineTo(ev._x, ev._y);
                    context.lineWidth = 1;
                    context.stroke();
                }
            };

            this.mouseup = function (ev) {
                end = new Date().getTime();
                if (tool.started) {
                    tool.mousemove(ev);
                    tool.started = false;
                }

                var addTime = (end - start)/1000.0;
                time += addTime;
            };
        }


        function ev_canvas (ev) {
            if (ev.layerX || ev.layerX == 0) {
                ev._x = ev.layerX;
                ev._y = ev.layerY;
            } else if (ev.offsetX || ev.offsetX == 0) {
                ev._x = ev.offsetX;
                ev._y = ev.offsetY;
            }

            var func = tool[ev.type];
            if (func) {
                func(ev);
            }
        }

        init();
    }, false); }
