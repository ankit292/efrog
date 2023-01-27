var socialMediaIconNames = [
    "affiliateIcon",
    "analyticsIcon",
    "awardsIcon",
    "cloadStorageIcon",
    "codeOptimizationIcon",
    "computerIcon",
    "digitalMarketingIcon",
    "emailMarketingIcon",
    "missionIcon",
    "monitoringIcon",
    "networkIcon",
    "ppcIcon",
    "seoTagIcon",
    "smartphoneIcon",
    "socialNetworkIcon",
    "targetingIcon",
    "efrogIcon"
];
//var socialMediaIconNames = ["chrome"];
iconNames = iconNames.concat(socialMediaIconNames);
var easeVar = Quad;
var linesToReset = [];
//animate each of the icons

window['affiliateIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#coinMain").node, .4, { scale: 0, transformOrigin: "50% 50%", ease: Bounce.easeOut })
        .from(f.select("#coin1").node, .4, { scale: 0, transformOrigin: "50% 50%", ease: Bounce.easeOut }, "-=.2")
        .from(f.select("#coin4").node, .4, { scale: 0, transformOrigin: "50% 50%", ease: Bounce.easeOut }, "-=.2")
        .from(f.select("#coin0").node, .4, { scale: 0, transformOrigin: "50% 50%", ease: Bounce.easeOut }, "-=.3")
        .from(f.select("#coin2").node, .4, { scale: 0, transformOrigin: "50% 50%", ease: Bounce.easeOut }, "-=.3")
        .from(f.select("#coin5").node, .4, { scale: 0, transformOrigin: "50% 50%", ease: Bounce.easeOut }, "-=.3")
        .from(f.select("#coin3").node, .4, { scale: 0, transformOrigin: "50% 50%", ease: Bounce.easeOut }, "-=.3")
        .timeScale(speed);

    animateLines(f, 6, tl, 0, .4, .1, index);
    animateStars(f, 7, tl, 0);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}






window['analyticsIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#glassHolder").node, .4, { scale: 0, transformOrigin: "50% 50%" })
        .from(f.select("#handle").node, .4, { scale: 0, transformOrigin: "top left" }, "-=.2")
        .from(f.select("#gearAll").node, .4, { alpha: 0 }, "-=.2")
        .from(f.select("#glare").node, .4, { alpha: 0 }, "-=.2")
        .to(f.select("#spinner1").node, 3, { rotation: 149, transformOrigin: "left center", ease: easeVar.easeInOut }, ".5")
        .to(f.select("#spinner4").node, 4, { rotation: 180, transformOrigin: "top center", repeat: -1, yoyo: true, repeatDelay: 1 }, "3")
        .to(f.select("#spinner3").node, 4, { rotation: 146, transformOrigin: "top center", repeat: -1, yoyo: true, repeatDelay: 1 }, "3.1")
        .to(f.select("#spinner2").node, 4, { rotation: 86, transformOrigin: "top center", repeat: -1, yoyo: true, repeatDelay: 1 }, "3.2")
        .to(f.select("#gearRed").node, 20, { rotation: 360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)
        .timeScale(speed);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['awardsIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#awardCircle").node, .4, { scale: 0, transformOrigin: "50% 50%" })
        .from(f.select("#starAward").node, .4, { scale: 0, transformOrigin: "50% 50%" }, "-=.2")
        .from(f.select("#ribbonLeft").node, .4, { scaleX: 0, transformOrigin: "right" }, "-=.2")
        .from(f.select("#ribbonRight").node, .4, { scaleX: 0, transformOrigin: "left" }, "-=.2")
        .timeScale(speed);
    animateStars(f, 3, tl, .4);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['cloadStorageIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#cloud0").node, .4, { alpha: 0 })
        .from(f.select("#cloud1").node, .4, { alpha: 0 }, "-=.2")
        .from(f.select("#page0").node, .4, { y: 35 })
        .from(f.select("#page1").node, .4, { y: 37 }, "-=.2")
        .timeScale(speed);
    animateStars(f, 6, tl, .4);


    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}






window['codeOptimizationIcon'] = function(index, f, thisIcon) {

    var startingTime = .4;
    var textCount = 48;
    var newTL = new TimelineMax({ repeat: -1 });
    var timeBetween = .1;
    var totalTime = startingTime + timeBetween * textCount;
    for (var i = 0; i < textCount; i++) {
        newTL.from(f.select("#text" + i).node, .1, { scaleX: 0, transformOrigin: "left" }, startingTime + timeBetween * i)
    };
    newTL.to(f.select("#codeAll").node, .6, { y: -27 }, totalTime);

    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#computerBottom").node, .4, { scaleX: 0, transformOrigin: "middle" })
        .from(f.select("#computerTop").node, .4, { scaleY: 0, transformOrigin: "bottom" })
        .from(f.select("#gearBottom").node, .3, { y: 22 }, "-=.0")
        .add(newTL)
        .to(f.select("#gearRed").node, 25, { rotation: 360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)
        .timeScale(speed);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['digitalMarketingIcon'] = function(index, f, thisIcon) {

    var soundAnimation = new TimelineMax({ repeat: -1, yoyo: true, repeatDelay: 1 })
        .from(f.select("#sound0").node, 1, { scale: 0, alpha: 0, transformOrigin: "bottom left", ease: easeVar.easeInOut })
        .from(f.select("#sound1").node, 1, { scaleX: 0, alpha: 0, transformOrigin: "left", ease: easeVar.easeInOut }, "-=.6")
        .from(f.select("#sound2").node, 1, { scale: 0, alpha: 0, transformOrigin: "top left", ease: easeVar.easeInOut }, "-= .6")


    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .set(f.select("#megaphoneAll").node, { rotation: -45, transformOrigin: "50% 50%" })
        .from(f.select("#core").node, .4, { scale: 0, transformOrigin: "50% 50%" })
        .from(f.select("#phone").node, .4, { scaleX: 0, transformOrigin: "left" })
        .from(f.select("#rim").node, .4, { scaleY: 0, transformOrigin: "center" }, "-=.2")
        .from(f.select("#handle").node, .4, { y: -13 }, "-=.4")
        .from(f.select("#bottom").node, .4, { x: 5 }, "-=.3")
        .from(f.select("#ball").node, .4, { x: -5 }, "-=.2")
        .add(soundAnimation, 1)
        .timeScale(speed);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['emailMarketingIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })

    .from(f.select("#envelopeBack").node, .4, { alpha: 0 })
        .from(f.select("#envelopeFront").node, .4, { alpha: 0 }, 0)
        .from(f.select("#envelopeFlap").node, .4, { scaleY: -1, fill: "#FACB6B", transformOrigin: "bottom" })
        .from(f.select("#message").node, 1, { y: 70 })
        .from(f.select("#camera").node, .4, { alpha: 0, x: -10 }, "-=.5")
        .from(f.select("#globe").node, .4, { alpha: 0, x: 10 }, "-=.3")
        .from(f.select("#pin").node, .4, { alpha: 0, x: -10 }, "-=.3")
        .from(f.select("#at").node, .4, { alpha: 0, x: 10 }, "-=.3")
        .timeScale(speed);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['missionIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })

    .from(f.select("#base").node, .4, { scaleY: 0, transformOrigin: "bottom" })
        .from(f.select("#baseTop").node, .4, { y: 3 }, "-=.2")
        .from(f.select("#cupBody").node, 1, { y: 43 }, .3)
        .from(f.select("#plaque").node, 1, { scaleX: 0, transformOrigin: "right" }, .3)
        .from(f.select("#armR").node, 1, { scaleX: 0, transformOrigin: "left" }, .3)
        .from(f.select("#armL").node, 1, { scaleX: 0, transformOrigin: "right" }, .3)
        .timeScale(speed);
    animateStars(f, 3, tl, .7);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['monitoringIcon'] = function(index, f, thisIcon) {

    var hbLine = new TimelineMax()


    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#circle").node, .4, { scale: 0, transformOrigin: "50% 50%" })
        .from(f.select("#handle").node, .4, { scale: 0, transformOrigin: "top right" }, "-=.2")
        .from(f.select("#gearAll").node, .4, { alpha: 0 }, "-=.2")
        .from(f.select("#glare").node, .4, { alpha: 0 }, "-=.2")
        .from(f.select("#heartbeatDot").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, "-=.3")
        .from(f.select("#heartbeatMaskToUse").node, 1.3, { scaleX: .01, ease: Linear.easeNone, repeat: -1, repeatDelay: 2 }, .5)


    .to(f.select("#gearGray").node, 20, { rotation: 360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)
        .timeScale(speed);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['efrogIcon'] = function(index, f, thisIcon) {

    var hbLine = new TimelineMax()


    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#circle1").node, .4, { scale: 0, transformOrigin: "50% 50%" })
        .from(f.select("#handle1").node, .4, { scale: 0, transformOrigin: "top right" }, "-=.2")
        .from(f.select("#gearAll1").node, .4, { alpha: 0 }, "-=.2")
        .from(f.select("#glare1").node, .4, { alpha: 0 }, "-=.2")
        .from(f.select("#heartbeatDot1").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, "-=.3")
        .from(f.select("#heartbeatMaskToUse1").node, 1.3, { scaleX: .01, ease: Linear.easeNone, repeat: -1, repeatDelay: 2 }, .5)


    .to(f.select("#gearGray").node, 20, { rotation: 360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)
        .timeScale(speed);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}
window['networkIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })

    .from(f.select("#computer0").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut })
        .from(f.select("#link0").node, .3, { scale: 0, transformOrigin: "top right" }, .2)
        .from(f.select("#computer1").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, .3)
        .from(f.select("#link1").node, .3, { scale: 0, transformOrigin: "top left" }, .4)
        .from(f.select("#computer2").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, .5)
        .from(f.select("#link2").node, .3, { scale: 0, transformOrigin: "top right" }, .6)
        .from(f.select("#computer3").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, .7)
        .from(f.select("#link3").node, .3, { scaleY: 0, transformOrigin: "top" }, .8)
        .from(f.select("#computer4").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, .9)
        .from(f.select("#link4").node, .3, { scale: 0, transformOrigin: "top left" }, 1)
        .from(f.select("#computer5").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, 1.1)
        .timeScale(speed);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['ppcIcon'] = function(index, f, thisIcon) {
    var startingTime = .4;
    var textCount = 26;
    var newTL = new TimelineMax();
    var timeBetween = .1;
    var totalTime = startingTime + timeBetween * textCount;
    for (var i = 0; i < textCount; i++) {
        newTL.from(f.select("#text" + i).node, .1, { scaleX: 0, transformOrigin: "left" }, startingTime + timeBetween * i)
    };

    var coinTl = new TimelineMax({ repeat: -1, repeatDelay: 1 })
        .from(f.select("#cursor").node, .1, { y: 1 })
        .from(f.select("#coin0").node, .4, { y: -1, x: 1, alpha: 0 })
        .to(f.select("#coin0").node, .4, { alpha: 0, ease: easeVar.easeIn }, 1)
        .from(f.select("#coin1").node, .4, { y: 1, x: -1, alpha: 0 }, .2)
        .to(f.select("#coin1").node, .4, { alpha: 0, ease: easeVar.easeIn }, 1.2)
        .from(f.select("#coin2").node, 1, { y: 2, x: -4, alpha: 0 }, .3)
        .to(f.select("#coin2").node, .4, { alpha: 0, ease: easeVar.easeIn }, 1.3)
        .from(f.select("#coin3").node, 1, { y: -2, x: 4, alpha: 0 }, .4)
        .to(f.select("#coin3").node, .4, { alpha: 0, ease: easeVar.easeIn }, 1.4)
        .from(f.select("#coin4").node, 1.1, { y: -4, x: 2, alpha: 0 }, .4)
        .to(f.select("#coin4").node, .4, { alpha: 0, ease: easeVar.easeIn }, 1.5)
        .from(f.select("#coin5").node, 1.2, { y: 5, x: -3, alpha: 0 }, .4)
        .to(f.select("#coin5").node, .4, { alpha: 0, ease: easeVar.easeIn }, 1.6)
        .from(f.select("#coin6").node, 1.3, { y: -5, x: 5, alpha: 0 }, .4)
        .to(f.select("#coin6").node, .4, { alpha: 0, ease: easeVar.easeIn }, 1.7)
        .from(f.select("#coin7").node, 1.3, { y: 5, x: -5, alpha: 0 }, .5)
        .to(f.select("#coin7").node, .4, { alpha: 0, ease: easeVar.easeIn }, 1.8)

    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })

    .from(f.select("#website").node, .7, { y: -35 })
        .from(f.select("#webpageImage").node, .4, { scale: 0, transformOrigin: "50% 50%" }, "-=.3")
        .from(f.select("#cursor").node, .4, { y: 5, x: 5, alpha: 0 }, "-=.3")
        .add(coinTl, "+=.5")
        .add(newTL, .5)
        .timeScale(speed);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['seoTagIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#tagBg").node, .5, { scale: 0, transformOrigin: "top left" })
        .from(f.select("#letterS").node, .4, { alpha: 0 }, "-=.2")
        .from(f.select("#letterE").node, .4, { alpha: 0 }, "-=.2")
        .from(f.select("#letterO").node, .4, { alpha: 0 }, "-=.2")
        .timeScale(speed);
    animateStars(f, 6, tl, .2);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['socialNetworkIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })
        .from(f.select("#circle1").node, .4, { scale: 0, transformOrigin: "50% 50%" })
        .from(f.select("#circle0").node, .4, { scale: 0, transformOrigin: "50% 50%" }, "-=.3")
        .from(f.select("#avatar3").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, "-=.2")
        .from(f.select("#line1").node, .4, { alpha: 0 }, "-=1")
        .from(f.select("#avatar1").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, "-=.9")
        .from(f.select("#line2").node, .4, { alpha: 0 }, "-=.6")
        .from(f.select("#avatar2").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, "-=.9")
        .from(f.select("#line0").node, .4, { alpha: 0 }, "-=.8")
        .from(f.select("#avatar0").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, "-=.9")
        .from(f.select("#line3").node, .4, { alpha: 0 }, "-=.8")
        .from(f.select("#avatar4").node, 1, { scale: 0, transformOrigin: "50% 50%", ease: Elastic.easeOut }, "-=.9")
        .timeScale(speed);
    animateStars(f, 8, tl, .2);
    tls[index] = tl;
    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}

window['computerIcon'] = function(index, f, thisIcon) {
    //animate in animation

    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })

    .from(f.select("#backgound").node, .4, { scale: 0, transformOrigin: "50% 50%" }, "-=.2")
        .from(f.select("#website").node, .3, { x: 29 })
        .from(f.select("#gearTop").node, .3, { y: -15 }, "-=.3")
        .from(f.select("#gearBottom").node, .3, { y: 22 }, "-=.3")
        .from(f.select("#screenEdges").node, .2, { scale: .9, alpha: 0, transformOrigin: "50% 50%" }, "-=.2")
        .from(f.select("#frame").node, .2, { scale: 0 }, "-=.2")
        .from(f.select("#stand").node, .3, { scaleY: 0 }, "-=.2")
        .from(f.select("#glare").node, .4, { alpha: 0 }, "-=.2")
        .to(f.select("#gearRed").node, 25, { rotation: 360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)
        .to(f.select("#gearBlack").node, 25, { rotation: -360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)
        .timeScale(speed);
    animateStars(f, 3, tl, .6);
    tls[index] = tl;

    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;


}



window['targetingIcon'] = function(index, f, thisIcon) {
    //animate in animation

    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })

    .from(f.select("#ring5").node, .3, { scale: 0, transformOrigin: "50% 50%" })
        .from(f.select("#ring4").node, .3, { scale: 0, transformOrigin: "50% 50%" }, "-=.2")
        .from(f.select("#ring3").node, .3, { scale: 0, transformOrigin: "50% 50%" }, "-=.2")
        .from(f.select("#ring2").node, .3, { scale: 0, transformOrigin: "50% 50%" }, "-=.2")
        .from(f.select("#ring1").node, .3, { scale: 0, transformOrigin: "50% 50%" }, "-=.2")
        .from(f.select("#shadowLeft").node, .3, { alpha: 0 }, "-=.4")
        .from(f.select("#arrowMainAll").node, .1, { alpha: 0, x: 15, y: -6, ease: Circ.easeIn }, 1.5)
        .timeScale(speed);

    for (var i = 0; i < 13; i++) {
        tl.from(f.select("#arrow" + i).node, 1, { alpha: 0, transformOrigin: "50% 50%", repeat: -1, yoyo: true, repeatDelay: 1 }, i / 12);
    };

    tls[index] = tl;

    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;


}

window['smartphoneIcon'] = function(index, f, thisIcon) {
    var tl = new TimelineLite({ onStart: animationComplete, onStartParams: [index, true], onReverseComplete: animationComplete, onReverseCompleteParams: [index, false] })

    .from(f.select("#background").node, .4, { scale: 0, transformOrigin: "50% 50%" }, "-=.2")
        .from(f.select("#phone").node, .4, { scale: 0, alpha: 0, transformOrigin: "bottom right" }, "-=.2")
        .from(f.select("#speaker").node, .4, { scaleX: 0, transformOrigin: "50%" }, "-=.2")
        .from(f.select("#gearRedAll").node, .3, { x: -10, y: -15 }, "-=.3")
        .from(f.select("#gearBlueAll").node, .3, { alpha: 0, x: 10, y: 15 }, "-=.3")


    .from(f.select("#glare").node, .4, { alpha: 0 }, "-=.2")

    .to(f.select("#gearRed").node, 25, { rotation: -360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)
        .to(f.select("#gearBlue").node, 25, { rotation: 360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)
        .to(f.select("#gearBlueShadow").node, 25, { rotation: 360, transformOrigin: "50% 50%", repeat: -1, ease: Linear.easeNone }, 0)

    .timeScale(speed);
    animateStars(f, 3, tl, .4);

    tls[index] = tl;

    var tlRollover = new TimelineLite();
    tlsRollover[index] = tlRollover;
}


function animateLines(f, pathCount, thisTl, startingTime, animationTime, timeBetween, index) {

    var thisLinesToReset = [];
    for (var i = 0; i < pathCount; i++) {



        var fakeTweenObj = { currentLength: 0 };
        var thisPath = f.select("#path" + i);
        var pathLength = Snap.path.getTotalLength(thisPath);
        thisLinesToReset.push(thisPath);

        thisPath.attr({
            strokeDasharray: pathLength + " " + pathLength,
            strokeDashoffset: pathLength
        });
        thisTl.from(fakeTweenObj, animationTime, {
            ease: Quad.easeInOut,
            currentLength: pathLength,
            onUpdate: drawTheLine,
            onUpdateParams: [fakeTweenObj, thisPath]
        }, timeBetween * i);
        //thisTl.from(f.select("#star" + i).node, 1.5, {alpha:0, repeatDelay:1, repeat:-1, ease:Linear.easeNone, yoyo:true}, startingTime + timeBetween * i)


    };


    linesToReset[index] = thisLinesToReset;

}

function resetLines(thisIcon) {

    if (linesToReset[thisIcon]) {


        for (var i = 0; i < linesToReset[thisIcon].length; i++) {
            var thisPath = linesToReset[thisIcon][i];
            var pathLength = Snap.path.getTotalLength(thisPath);
            thisPath.attr({
                strokeDasharray: pathLength + " " + pathLength,
                strokeDashoffset: pathLength
            });
        }
    }
}

//this actually moves the lines during the tween above
function drawTheLine(fakeTweenObj, thisPath) {
    thisPath.attr({
        strokeDashoffset: fakeTweenObj.currentLength
    });
}


function animateStars(f, starCount, thisTl, startingTime) {
    var timeBetween = .2;
    for (var i = 1; i < starCount + 1; i++) {
        thisTl.from(f.select("#star" + i).node, 1.5, { alpha: 0, repeatDelay: 1, repeat: -1, ease: Linear.easeNone, yoyo: true }, startingTime + timeBetween * i)
    };

}