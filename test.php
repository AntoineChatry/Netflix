<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 0 800 600">
<defs>
    <linearGradient id="BGDarkGrad" gradientUnits="userSpaceOnUse" x1="217" y1="300" x2="599" y2="300">
        <stop  offset="0" style="stop-color:#636363"/>
        <stop  offset="0.1597" style="stop-color:#555757"/>
        <stop  offset="0.7174" style="stop-color:#293030"/>
        <stop  offset="1" style="stop-color:#182121"/>
    </linearGradient>
    <linearGradient id="BGLightGrad" gradientUnits="userSpaceOnUse" x1="217" y1="300" x2="599" y2="300">
        <stop  offset="0" style="stop-color:#7B0000"/>
        <stop  offset="0.3336" style="stop-color:#A61300"/>
        <stop  offset="0.6703" style="stop-color:#D62900"/>
        <stop  offset="1" style="stop-color:#FF4200"/>
    </linearGradient>
	<linearGradient id="planetSmall" gradientUnits="userSpaceOnUse" x1="422" y1="214" x2="468" y2="214">
        <stop  offset="0" style="stop-color:#D62900"/>
        <stop  offset="1" style="stop-color:#FA2300;stop-opacity:0.8"/>
    </linearGradient>
    <linearGradient id="planetBig" gradientUnits="userSpaceOnUse" x1="482.9608" y1="337.5356" x2="549.6864" y2="453.1078">
		<stop  offset="0" style="stop-color:#FA2300"/>
		<stop  offset="1" style="stop-color:#D62900"/>
	</linearGradient>
    <linearGradient id="planetBigDark" gradientUnits="userSpaceOnUse" x1="178.5151" y1="536.6867" x2="267.1119" y2="442.7123">
        <stop  offset="0" style="stop-color:#222528"/>
        <stop  offset="0.194" style="stop-color:#2A2D30"/>
        <stop  offset="0.4994" style="stop-color:#414344"/>
        <stop  offset="0.876" style="stop-color:#656666"/>
        <stop  offset="1" style="stop-color:#737373"/>
    </linearGradient>
    <linearGradient id="cometLeftGrad" gradientUnits="userSpaceOnUse" x1="319.475" y1="313.3" x2="319.475" y2="273.2">
        <stop  offset="0" style="stop-color:#FFFFFF"/>
        <stop  offset="0.0699" style="stop-color:#FFFFFF;stop-opacity:0.9301"/>
        <stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
    </linearGradient>
    <linearGradient id="cometRightGrad" gradientUnits="userSpaceOnUse" x1="448.6955" y1="254.7794" x2="498.3045" y2="254.7794">
        <stop  offset="0" style="stop-color:#FFFFFF"/>
        <stop  offset="0.1248" style="stop-color:#FFFFFF;stop-opacity:0.8752"/>
        <stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
    </linearGradient>

    <clipPath id="falconClip">
        <circle  cx="316" cy="300" r="78"/>
    </clipPath>
    <clipPath id="deathStarClip">
        <circle cx="316" cy="300" r="78"/>
    </clipPath>
</defs>    
<path id="BGDark" fill="url(#BGDarkGrad)" d="M501.5,398h-187c-53.848,0-97.5-43.652-97.5-97.5v-1c0-53.848,43.652-97.5,97.5-97.5
    h187c53.848,0,97.5,43.652,97.5,97.5v1C599,354.348,555.348,398,501.5,398z"/>
<path id="BG" fill="url(#BGLightGrad)" d="M501.5,398h-187c-53.848,0-97.5-43.652-97.5-97.5v-1c0-53.848,43.652-97.5,97.5-97.5h187
    c53.848,0,97.5,43.652,97.5,97.5v1C599,354.348,555.348,398,501.5,398z"/>
<g>
    <defs>
        <path id="SVGID_1_" d="M501.5,398h-187c-53.848,0-97.5-43.652-97.5-97.5v-1c0-53.848,43.652-97.5,97.5-97.5h187
            c53.848,0,97.5,43.652,97.5,97.5v1C599,354.348,555.348,398,501.5,398z"/>
    </defs>
    <clipPath id="SVGID_2_">
        <use xlink:href="#SVGID_1_"  overflow="visible"/>
    </clipPath>
    <g clip-path="url(#SVGID_2_)">
    <circle id="smallPlanet" fill="url(#planetSmall)" cx="445" cy="214" r="23"/>
    <path id="bigPlanet" fill="url(#planetBig)" d="M462.179,433.129
        c21.922,28.54,63.257,33.576,92.325,11.249c29.068-22.327,34.861-63.563,12.939-92.103s-63.257-33.576-92.325-11.249
        S440.257,404.589,462.179,433.129z"/>
    </g>    
    <g clip-path="url(#SVGID_2_)">
    <g id="starGroupDark">
        <g id="bigStarDarkGroup">
            <circle id="bigStarDarkBG" fill="#737373" fill-opacity="0.75" cx="727" cy="252" r="18"/>
            <polygon id="bigStarDark" fill="#FFFFFF" points="727.025,261.995 723.475,255.543 717.005,252.025 723.457,248.475 
                726.975,242.005 730.525,248.457 736.995,251.975 730.543,255.525"/>
        </g>
        <g id="smallDarkStars">
            <circle opacity="0.7" fill="#FFFFFF" cx="676" cy="247" r="3"/>
            <circle fill="#FFFFFF" cx="634" cy="279" r="3"/>
            <circle fill="#FFFFFF" cx="764" cy="363" r="3"/>
        </g>
    </g>
    <g id="starGroupLight">
        <g id="bigLightStarGroup">
            <circle id="lightStarBG" fill="#FFFFFF" fill-opacity="0.25" cx="539" cy="252" r="18"/>
            <polygon id="lightStar" fill="#FFFFFF"  points="539.025,261.995 535.475,255.543 529.005,252.025 535.457,248.475 
                538.975,242.005 542.525,248.457 548.995,251.975 542.543,255.525"/>
            <circle  fill="#FFFFFF" fill-opacity="0.2" cx="442" cy="318" r="15"/>
            <polygon fill="#FFFFFF" points="442.015,323.985 439.889,320.121 436.015,318.015 439.879,315.889 441.985,312.015 
                444.111,315.879 447.985,317.985 444.121,320.111"/>
        </g>
        <g id="smallLightStars">
            <circle fill="#FFFFFF" cx="422" cy="229" r="3"/>
            <circle opacity="0.7" fill="#FFFFFF" cx="491" cy="294" r="3"/>
            <circle fill="#FFFFFF" cx="555" cy="303" r="3"/>
        </g>
    </g>
    </g>
	<g id="cometLeft">
        <path fill="url(#cometLeftGrad)" d="M300.5,274.5c3.427,2.823,6.708,5.792,10.002,8.748c3.287,2.963,6.45,6.05,9.628,9.122
            c3.177,3.073,6.396,6.104,9.414,9.336c3.023,3.227,6.003,6.497,8.798,9.952c0.169,0.209,0.136,0.515-0.072,0.684
            c-0.182,0.147-0.437,0.141-0.611,0c-3.456-2.794-6.726-5.774-9.952-8.798c-3.232-3.018-6.263-6.237-9.336-9.414
            c-3.073-3.177-6.159-6.341-9.122-9.628C306.292,281.208,303.323,277.927,300.5,274.5z"/>
    </g>
    <g id="cometRight">
        <path fill="url(#cometRightGrad)" d="M497,231c-3.614,4.219-7.373,8.293-11.12,12.38l-5.704,6.046l-5.792,5.958
            c-3.867,3.967-7.7,7.967-11.711,11.789c-4.027,3.806-8.035,7.632-12.256,11.244c-0.248,0.212-0.621,0.183-0.833-0.065
            c-0.192-0.224-0.186-0.551,0-0.769c3.613-4.221,7.438-8.229,11.244-12.256c3.822-4.011,7.823-7.844,11.789-11.711l5.958-5.792
            l6.046-5.704C488.707,238.373,492.781,234.614,497,231z"/>
    </g>
</g>
<g id="toggleGroup">
    <circle id="shipStarBG" fill="#FFFFFF" cx="316" cy="300" r="78"/>
    <g id="falconFront">
        <path fill="#FFFFFF" d="M201,310v11l68,41c0,0-28-25-29-52H201z"/>
        <path fill="#FFFFFF" d="M201,290v-11l68-41c0,0-28,25-29,52H201z"/>
        <rect x="223" y="290" fill="#FFFFFF" width="17" height="20"/>
    </g>
    <path id="falconTop" display="inline" fill="#FFFFFF" d="M275.458,223.687c-0.286-0.429-0.768-0.687-1.284-0.687h-4.67h-17.162
        c-5.326,0-9.977,4.019-10.321,9.334C241.644,238.159,246.257,243,252,243h17.505H275h6v-11L275.458,223.687z"/>
    <g id="falconLinesNoClip">
        <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="223" y1="291" x2="239" y2="291"/>
        <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="223" y1="309" x2="239" y2="309"/>
    </g>
    
    <g id="deathStar" clip-path="url(#deathStarClip)">
        <line id="deathStarMiddleLine" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" x1="281" y1="300" x2="409" y2="300"/>
        <g id="deathStarSmallLineGroup">
            <line fill="none" id="smCL" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" x1="301" y1="277" x2="315" y2="277"/>
            <line fill="none" id="smL" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" x1="274" y1="325" x2="288" y2="325"/>
            <line fill="none" id="smCR" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" x1="331" y1="329" x2="316" y2="329"/>
            <line fill="none" id="smR" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" x1="363" y1="341" x2="350" y2="341"/>
        </g>
        <g id="centerLines">
            <line id="centerTop" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" x1="316" y1="245" x2="316" y2="222"/>
            <line id="centerMid" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" x1="315" y1="269" x2="315" y2="345"/>
            <path id="centerBot" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M315,378v-18.5"/>
        </g>
        <g id="centerLinesMorph" style="display:none">
            <path id="centerTopMorph" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M316,222c0,0,14,7,28,27"/>
            <path id="centerMidMorph" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M354.5,270.5c0,0,13,42-8,77"/>
            <path id="centerBotMorph" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M315,378c0,0,8-1,23-19"/>
        </g>
        <g id="centerLinesMorph2" display="none">
            <path id="centerTopMorph2" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M316,222
            c0,0,27-3,58,26"/>
            <path id="centerMidMorph2" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="
            M387.5,269.5c0,0,18,37-10,77"/>
            <path id="centerBotMorph2" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M315,378
            c0,0,27,1,48.5-17.5"/>
        </g>
        <g id="outerLines">
            <path id="outerTop" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M316,222c0,0,15,10,26,23"/>
            <path id="outerBot" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M315,378
            c0,0,34.531-20.642,42.564-57.908c1.818-8.433,2.163-17.118,1.381-25.71L358,284"/>
        </g>
        <g id="outerLinesMorph" style="display:none">
            <path id="outerTopMorph" fill="none" stroke="#B5B5B5" stroke-width="2" stroke-miterlimit="10" d="M316,222c0,0,32-1,57,26"/>
			<path id="outerBotMorph" fill="none" stroke="#B5B5B5" stroke-width="2" stroke-miterlimit="10" d="M315,378c0,0,54,4,75-56
            c2.85-8.143,3.727-19.026,2.945-27.617L391,280"/>
        </g>
        <g id="bentLinesLeft">
            <path id="bentLineLeft" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="
            M289,353c0,0,15,19,26,25"/>
			<path id="bentLineLeftMorph" style="display:none" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="
			M315,353c0,0,0,16,0,25"/>
            <path id="bentLineLeftMorph2" style="display:none" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="
			M332,362c0,0-8,13-17,16"/>
			<path id="bentLineLeftMorph3" style="display:none" fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="
            M340,375c0,0-15,6-25,3"/>    
        </g>
        <g id="deathStarCircleGroup">
            <circle fill="#FFFFFF" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" cx="350" cy="265" r="21"/>
            <circle fill="#FFFFFF" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" cx="350" cy="265" r="4"/>
        </g>  
    </g>
    <g id="falcon">
        <g clip-path="url(#falconClip)">
        <g id="falconLines">
            <circle fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" cx="318.5" cy="298.5" r="26"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="361" y1="247" x2="333" y2="276"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="361" y1="351" x2="332.5" y2="321.5"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="307" y1="220.5" x2="307" y2="274.993"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="331" y1="220.5" x2="331" y2="274.993"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="307" y1="269" x2="281" y2="230"/>
            <g id="falconDots">
                <circle fill="#B5B5B5" cx="356.5" cy="278.5" r="3"/>
                <circle fill="#B5B5B5" cx="361" cy="299" r="3"/>
                <circle fill="#B5B5B5" cx="356" cy="319" r="3"/>
                <circle fill="#B5B5B5" cx="377" cy="327" r="3"/>
                <circle fill="#B5B5B5" cx="382" cy="299" r="3"/>
                <circle fill="#B5B5B5" cx="377" cy="270" r="3"/>
            </g>
            <path fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M239.855,291
            c1.787-18.695,10.215-34.855,22.923-47.501l1.722,0.001l30,45"/>
            <path fill="none" stroke="#B5B5B5" stroke-width="3" stroke-miterlimit="10" d="M267.5,361.5
            c-15.674-12.43-25.08-31.47-27.422-52.5"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="307" y1="322.5" x2="307" y2="378.993"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="331" y1="322.5" x2="331" y2="376.993"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="223" y1="291" x2="293" y2="291"/>
            <line fill="none" stroke="#B5B5B5" stroke-width="3 " stroke-miterlimit="10" x1="223" y1="309" x2="294" y2="309"/>
        </g>  
    
    <path id="falconOverlay"  fill="#FFFFFF" d="M225,307c0,70.14,104.318,127,233,127
        c0,0-62.731-60.116-62.731-130.256S458,180,458,180C329.318,180,225,236.86,225,307z"/> 
    </g>
    </g>
</g>
</svg>


<style type="text/css">
    
body {
  display:flex;

}
svg {
  width:500px;
  visibility:hidden;
}
#toggleGroup {
  cursor:pointer;
}
</style>

<script>
    const toggle = document.querySelector('#toggleGroup'),
red = document.querySelector('#BG'),
black = document.querySelector('#BGDark'),
starRed = document.querySelector('#lightStar'),
starRedBG = document.querySelector('#lightStarBG'),
starBlack = document.querySelector('#bigStarDark'),
starBlackBG = document.querySelector('#bigStarDarkBG'),
dsLines = document.querySelector('#deathStarLines'),
dsOverlay = document.querySelector('#deathStarOverlay'),
shipFront = document.querySelector('#falconFront'),
shipTop = document.querySelector('#falconTop'),
shipLinesMasked = document.querySelector('#falconLines'),
shipLines = document.querySelector('#falconLinesNoClip'),
falconOverlay = document.querySelector('#falconOverlay'),
lightStarGroup = document.querySelector('#bigLightStarGroup'),
lightStarGroupSmall = document.querySelectorAll('#smallLightStars circle'),
smallPlanet = document.querySelector('#smallPlanet'),
bigPlanet = document.querySelector('#bigPlanet'),
cometRight = document.querySelector('#cometRight'),
cometLeft = document.querySelector('#cometLeft'),
darkStarGroup = document.querySelector('#bigStarDarkGroup'),
darkStarGroupSmall = document.querySelectorAll('#smallDarkStars circle');

MorphSVGPlugin.convertToPath('line');

TweenMax.set('svg',{visibility:"visible"});
TweenMax.set(shipFront,{x:45,scaleX:0.75,transformOrigin:"right center"})
TweenMax.set(shipTop,{x:34,opacity:0,scaleX:0.6,transformOrigin:"right center"})
TweenMax.set(shipLinesMasked,{opacity:0,x:4})
TweenMax.set(falconOverlay,{opacity:0})
TweenMax.set(shipLines,{opacity:0})
TweenMax.set(darkStarGroup,{opacity:0})
TweenMax.set(cometLeft,{x:60,scale:0.95,opacity:0,transformOrigin:"center center"})
TweenMax.set(cometRight,{scale:0.90,transformOrigin:"center bottom"})
TweenMax.set(darkStarGroupSmall,{x:75})

// ROTATE STARS FUNCTION
const rotateStar  = (x,y,delay) => {
    const starTl = new TimelineMax({delay:delay});
    starTl.to(x,0.24,{
        rotation:'+=90',
        transformOrigin:"center center",
        scale:1.15,
    },'in')
    .to(y,0.24,{
        transformOrigin:"center center",
        scale:1.15,
        attr: {
            'fill-opacity':"0.35"
        }
        },'in')
    .to(x,0.24,{
        rotation:'+=90',
        transformOrigin:"center center",
        scale:1,
    },'out')
    .to(y,0.24,{
        transformOrigin:"center center",
        scale:1,        
        attr: {
            'fill-opacity':"0.25"
        }
    },'out') 
    return starTl;
} 

const onLoad = () => {
    rotateStar(starRed,starRedBG,0.1);
}

// TOGGLE
// Set the transformValue to determine the direction of the toggle
const toggleBtn = (transformValue) => {
    const toggleTl = new TimelineMax({paused:false})
    .to(toggle,0.75,{
        x:transformValue,
        ease:Power1.easeIn
    },'toggle')
    .to(toggle,0.2,{
        scaleX:0.97,
        transformOrigin:"right center"
    })
    .to(toggle,0.2,{
        scaleX:1,
        transformOrigin:"right center"
    })
    return toggleTl.timeScale(1.20);
}

// BACKGROUND
const bgTl = new TimelineMax({
    paused:true,
});
bgTl.to(black,1,{
    opacity:1
},'in')
.to(red,1,{
    opacity:0
},'in')

// STARS
const toggleStars = (
    starGroup,starGroupSmall,
    transformValue,starGroup2,
    starGroupSmall2,transformValue2,
    transformValue3
) => {
    const tl = new TimelineMax();
    tl.to(starGroup,1,{
        x:transformValue,
        opacity:0
    },'toggle')
    .to(starGroup,0.32,{
        transformOrigin:"center center",
        scale:0.6
    },'toggle')
    .to(starGroup,0.5,{
        scale:0.95
    },'toggle+=0.32')
    // Small stars 
    .to(starGroupSmall,0.75,{
        x:transformValue,
        opacity:0
    },'toggle')
    .to(starGroupSmall,0.32,{
        transformOrigin:"center center",
        scaleX:1.75,
        scaleY:0.55
    },'toggle')
    .to(starGroupSmall,0.5,{
        transformOrigin:"center center",
        scaleX:1,
        scaleY:1
    },'toggle+=0.5')
    // Star Group 2 
    .to(starGroup2,0.75,{
        x:transformValue2,
        opacity:1
    },'toggle+=0.25')
    // Small Group 2
    .to(starGroupSmall2,0.75,{
        x:transformValue2,
        opacity:1
    },'toggle+=0.25')
    .to(starGroupSmall2,0.7,{
        transformOrigin:"center center",
        scaleX:1.75,
        scaleY:0.55
    },'toggle+=0.25')
    .to(starGroupSmall2,0.24,{
        transformOrigin:"center center",
        scaleX:1,
        scaleY:1
    },'toggle+=0.8')
    // Bounce out
    .to(starGroup2,0.24,{
        x:transformValue3,
        opacity:1
    },'toggle+=1')
    .to(starGroupSmall2,0.24,{
        x:transformValue3,
        opacity:1
    },'toggle+=1')
    return tl.timeScale(1.2);
}

// PLANETS
const togglePlanets = new TimelineMax({paused:true});
// SMALL
togglePlanets.to(smallPlanet,0.08,{
    x:2,
    y:1,
    transformOrigin:"center bottom",
    scale:0.92
},'toggle')
.fromTo(smallPlanet,0.32,{
    x:2,
    y:1
},{
    x:-40,
    y:0,
},'toggle+=0.08')
.to(smallPlanet,0.16,{
    opacity:0
},'toggle+=0.12')
// BIG
.to(bigPlanet,0.16,{
    scale:1.08,
    transformOrigin:"center center",
    ease:Linear.easeNone
},"toggle")
.to(bigPlanet,0.84,{
    x:-245,
    y:-10
},'toggle+=0.16')
.to(bigPlanet,0.32,{
    transformOrigin:"center center",
    scale:0.85
},'toggle')
.to(bigPlanet,0.24,{
    opacity:0
},'toggle+=0.16')
// Change Planet color 
.set(bigPlanet,{
    attr:{
        fill:"url(#planetBigDark)"
    }
},'toggle+=0.32')
.to(bigPlanet,0.5,{
    transformOrigin:"center center",
    scale:1,
    opacity:1
},'toggle+=0.48')

// COMETS
const toggleComet = new TimelineMax({paused:true});
toggleComet
// RIGHT
.to(cometRight,0.16,{x:10,ease:Linear.easeNone},'toggle')
.to(cometRight,0.52,{x:-50,transformOrigin:"center bottom",ease:Linear.easeNone},'toggle+=0.16')
.to(cometRight,0.24,{opacity:0},'toggle+=0.48')
// LEFT
// hiding when toggle goes from r to l
.set(cometLeft,{opacity:1},'toggle+=0.32')
// showing when toggle goes from l to r
.set(cometLeft,{opacity:1},'toggle+=0.4')
.to(cometLeft,0.5,{x:0,opacity:1},'toggle+=0.48')


// DEATH STAR TL 
const dsLinesTl = new TimelineMax({paused:true,
    onReverseComplete : () => {
    // DEATH STAR OUT
    const tl = new TimelineMax();
    tl.to(centerBot,0.2,{x:-3},'bounce')
    .to(centerMid,0.2,{x:-3},'bounce')
    .to(centerTop,0.2,{x:-3},'bounce')
    .to(circleGroup,0.2,{scaleX:0.98,x:-3,transformOrigin:"left center"},'bounce')
    .to(outerBot,0.2,{x:-3},'bounce')
    .to(outerTop,0.2,{x:-3},'bounce')
    .to(smallLines,0.2,{x:-3},'bounce')
    .to(smallLinesCenterRight,0.2,{x:-2},'bounce')
    .to(smallLineRight,0.2,{x:-3},'bounce')
    .to(middleLine,0.2,{x:-3},'bounce')
    .to(bentLine,0.2,{rotation:-3,transformOrigin:"right bottom"},'bounce')

    .to(centerBot,0.2,{x:0},'out')
    .to(centerMid,0.2,{x:0},'out')
    .to(centerTop,0.2,{x:0},'out')
    .to(circleGroup,0.2,{scaleX:1,x:0,transformOrigin:"left center"},'out')
    .to(outerBot,0.2,{x:0},'out')
    .to(outerTop,0.2,{x:0},'out')
    .to(smallLines,0.2,{x:0},'out')
    .to(smallLinesCenterRight,0.24,{x:0},'out')
    .to(smallLineRight,0.2,{x:0},'out')
    .to(middleLine,0.2,{x:0},'out')
    .to(bentLine,0.2,{rotation:0,transformOrigin:"right bottom"},'out')
    .add(() => {toggled = false},'out+=0.25')}
});
// Lines
const centerBot = document.querySelector('#centerBot'),
centerMid = document.querySelector('#centerMid'),
centerTop = document.querySelector('#centerTop'),
circleGroup = document.querySelector('#deathStarCircleGroup'),
outerBot = document.querySelector('#outerBot'),
outerTop = document.querySelector('#outerTop'),
smallLines = document.querySelectorAll('#smCL,#smL'),
smallLinesCenterRight = document.querySelector('#smCR'),
smallLineRight = document.querySelector('#smR'),
middleLine = document.querySelector('#deathStarMiddleLine'),
bentLine = document.querySelector('#bentLineLeft');

dsLinesTl
.to(centerBot,0.16,{
    morphSVG:"#centerBotMorph",
    ease:Linear.easeNone
},'morph')
.to(centerMid,0.16,{
    morphSVG:"#centerMidMorph",
    ease:Linear.easeNone
},'morph')
.to(centerTop,0.16,{
    morphSVG:"#centerTopMorph",
    ease:Linear.easeNone
},'morph')
.fromTo(outerBot,0.16,{x:0,y:0},{
    morphSVG:"#outerBotMorph",
    ease:Linear.easeNone,
    x:4,
    y:2 
},'morph')
.fromTo(outerTop,0.16,{x:0,y:0},{
    morphSVG:"#outerTopMorph",
    ease:Linear.easeNone,
    x:4,
    y:-1
},'morph')
// Circle
.fromTo(circleGroup,0.16,{x:0,y:0},{
    transformOrigin:"center center",
    scaleY:1,
    scaleX:0.9,
    x:33,
    y:0,
    ease:Linear.easeNone
},'morph')
.fromTo(circleGroup,0.16,{x:33,y:0,immediateRender:false},{
    transformOrigin:"center center",
    scaleY:1,
    scaleX:0.9,
    x:72,
    y:-2,
    ease:Linear.easeNone
},'morph+=0.16')
// Small Horizontal Lines death star
.fromTo(smallLines,0.32,{x:0},{
    x:81,
    ease:Linear.easeNone
},'morph')
.fromTo(smallLinesCenterRight,0.32,{x:0},{
    x:77,
    ease:Linear.easeNone
},'morph')
.fromTo(smallLineRight,0.32,{x:0},{
    x:74,
    ease:Linear.easeNone
},"morph")
// Small Horizontal line middle
.fromTo(middleLine,0.32,{x:0},{
    x:85,
    ease:Linear.easeNone
},'morph')
.fromTo(smallLines,0.16,{x:81,immediateRender:false},{
    x:116,
    ease:Linear.easeNone
},'morph+=0.32')
.fromTo(middleLine,0.16,{x:85,immediateRender:false},{
    x:113,
    ease:Linear.easeNone
},'morph+=0.32')
.to(bentLine,0.16,{
    morphSVG:'#bentLineLeftMorph',
    ease:Linear.easeNone
},'morph')
.fromTo(centerBot,0.16,{x:0,y:0},{
    morphSVG:"#centerBotMorph2",
    x:4,
    y:2,
    ease:Linear.easeNone
},'morph+=0.16')
.fromTo(centerMid,0.16,{x:0},{
    morphSVG:"#centerMidMorph2",
    x:4,
    ease:Linear.easeNone
},'morph+=0.16')
.fromTo(centerTop,0.16,{x:0,y:0},{
    morphSVG:"#centerTopMorph2",
    x:4,
    y:-1,
    ease:Linear.easeNone
},'morph+=0.16')
.to(bentLine,0.16,{
    morphSVG:'#bentLineLeftMorph2',
    ease:Linear.easeNone
},'morph+=0.16')
.fromTo(bentLine,0.16,{y:0},{
    morphSVG:'#bentLineLeftMorph3',
    transformOrigin:"left bottom",
    ease:Linear.easeNone,
    y:1
},'morph+=0.32')
//

.set('#deathStar',{opacity:0},"morph+=0.48")

let toggled = false
// Falcon TL 
const falconIn  = () => {
    const tl = new TimelineMax({
        onComplete : () => {
            toggled = true
        }
    });
    tl
    .set(shipTop,{opacity:1},'toggle+=0.32')
    .to(shipTop,0.5,{x:0,scaleX:1},'toggle+=0.32')
    .to(shipFront,0.5,{x:0,scaleX:1},'toggle+=0.40')
    .set(falconOverlay,{opacity:1},'toggle+=0.48')
    .to(falconOverlay,0.48,{x:-158},'toggle+=0.48')
    .to(falconOverlay,1.1,{opacity:0},'toggle+=0.48')
    .to(shipLinesMasked,0.48,{opacity:1,x:0},'toggle+=0.48')
    .set(shipLines,{x:0},'toggle+=0.48')
    .to(shipLines,0.08,{opacity:1,ease:Linear.easeNone},'toggle+=0.88')
    // Bounce Out
    .to(shipLinesMasked,0.16,{x:1,scaleX:0.98,transformOrigin:"left center"},'toggle+=0.94')
    .to('#falconDots',0.16,{x:-1,transformOrigin:"left center"},'toggle+=0.94')
    .to(shipLinesMasked,0.16,{x:0,scaleX:1,transformOrigin:"left center"},'toggle+=1.10')
    .to('#falconDots',0.16,{x:0,transformOrigin:"left center"},'toggle+=1.10')    
    return tl.timeScale(1.20);
}


const falconOut = () => {
    const tl = new TimelineMax({
        onComplete:() => {  
            TweenMax.set(shipLinesMasked,{clearProps:'scale'})
        }
    });
    tl
    .to(shipLines,0.24,{opacity:0,x:4,ease:Linear.easeNone},'toggle')
    .to(shipLinesMasked,0.32,{opacity:0,x:-4,scale:1.05,transformOrigin:"center center"},'toggle')
    .to(falconOverlay,0.32,{x:0},'toggle')
    .to(shipTop,0.08,{x:-2,y:1,ease:Linear.easeNone},'toggle')
    .to(shipTop,0.40,{x:34,y:0,scaleX:0.6,transformOrigin:"right center"},'toggle+=0.08')
    .to(shipFront,0.40,{x:45,scaleX:0.75,transformOrigin:"right center"},'toggle+=0.08')  
    .set(shipTop,{opacity:0},'toggle+=0.48')
    return tl.timeScale(1.2);
}


const starBounceOut = (delay) => {
    const tl = new TimelineMax({delay:delay});
    tl.to(lightStarGroup,0.64,{scale:1.05,transformOrigin:"center center"})
        .to(lightStarGroup,0.24,{scale:1})
    return tl.timeScale(1.2);
}

// MASTER TL
const masterTl = new TimelineMax({paused:true});
masterTl.add(bgTl.play(),0)
        .add(togglePlanets.play(),0)
        .add(toggleComet.play(),0)
        .add(dsLinesTl.play(),0)
        
masterTl.timeScale(1.2)            

// Event listener toggle
toggle.addEventListener('click',() => {
    if (masterTl.progress() === 0 && !masterTl.isActive() && toggled === false) {
        masterTl.play();
        toggleBtn(
            180
        );
        toggleStars(
            lightStarGroup,
            lightStarGroupSmall,
            "-375",
            darkStarGroup,
            darkStarGroupSmall,
            "-430",
            "-380"
        );
        falconIn();
        rotateStar(
            starBlack,
            starBlackBG,
            1.18
        );  
    }
    if (masterTl.progress() === 1 && !masterTl.isActive() && toggled === true) {
        masterTl.reverse();
        toggleBtn(
            0
        );
        toggleStars(
            darkStarGroup,
            darkStarGroupSmall,
            '0',
            lightStarGroup,
            lightStarGroupSmall,
            "25",
            "0"
        )
        falconOut();
        starBounceOut(
            0.32
        )
        rotateStar(
            starRed,
            starRedBG,
            1.18
        );
       
    }
})

// ANIMATE STARS WHEN PAGE LOADS
onLoad();
</script>