var screenX = 1.73333333333333333;
TweenMax.set('.cube.static1', { y:-0, x: screenX*-0 });
TweenMax.set('.staticcopy1', { y:-0, x: screenX*-2 });
TweenMax.set('.staticcopy2', { y:-0, x: screenX*-4 });
TweenMax.set('.staticcopy3', { y:-1, x: screenX*-3 });
TweenMax.set('.staticcopy4', { y:-2, x: screenX*-3 });
TweenMax.set('.staticcopy5', { y:1, x: screenX*2 });
TweenMax.set('.staticcopy6', { y:1, x: screenX*3 });
TweenMax.from('.statics', 1, {opacity: 0 });

// ignore everything regarding statics (above)



TweenMax.set('svg .left *', { transformOrigin: '100% 50%' });
TweenMax.set('svg .right *', { transformOrigin: '0% 50%' });
TweenMax.set('svg .top *', { transformOrigin: '50% 50%' });


TweenMax.set("g.top g ",  {rotation:  30, skewX:-30});
TweenMax.set("g.left g",  {rotation:  30, skewX: 30});
TweenMax.set("g.right g", {rotation: -30, skewX:-30});
// note: there is no need for scaling, since GSAP default skewType is "compensated" and does the scaling job. Can be done manually by using scaleY:0.86062 and use skewType:"simple" (SSR).


var tl = new TimelineMax();
tl.timeScale(2)

.add("extend")

.add(sizeX(7))
.add(sizeX(0), "+=1")
.add(sizeX(-7), "+=0")
.add(sizeX(0), "+=1")
.add(sizeX(3))
.add(sizeX(1))

.add(sizeY(5))
.add(sizeY(0))
.add(sizeY(-2))
.add(sizeX(3)) // overlapping properties ...
;

function sizeY(extY) {
	var tl = new TimelineLite();
  if (extY < 0) { tl.to("g.left g rect", 1, {x: extY*2, y: -extY*2}, 0); } // should be handles on onUpdate?
  tl.to("g.right g rect", 1, {scaleX:extY}, 0);
  tl.to("g.top g rect", 1, {y: -extY+1, scaleY:extY}, 0);
	return tl;
}


function sizeX(extX) {
	var tl = new TimelineLite();
  tl.to("g.left g rect", 1, {x: -2+extX*2, y: "+=0", scaleX:extX}, 0);
  if (extX >= 0) tl.to("g.right g rect", 1, {x: -2+extX*2, y: -2+2*extX}, 0); // should be handles on onUpdate?
  tl.to("g.top g rect", 1, {x: -1+extX, y: "+=0", scaleX:extX}, 0);
	return tl;
}