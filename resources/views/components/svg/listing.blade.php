<svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -5 200 200" width="{{ $w }}" height="{{ $h }}">

    <circle transform="rotate(0)" transform-origin="center" cx="50" cy="50" r="50" fill="none"
        stroke={{ $sc }} stroke-width={{ $sw }} stroke-dasharray="100" stroke-dashoffset="30">
        <animate attributeName="stroke-dashoffset" type="rotate" values="0;360" dur="6" repeatCount="indefinite"
            begin="-4">

        </animate>
    </circle>
    <circle transform="rotate(0)" transform-origin="center" cx="50" cy="50" r="50"
        fill={{ $fill }} stroke={{ $sc }} stroke-width={{ $sw }} stroke-dasharray="3"
        stroke-dashoffset="10" opacity="1">
        <animate attributeName="stroke-dashoffset" type="rotate" values="0;360" dur="6" repeatCount="indefinite"
            begin="0">

        </animate>
        <animate attributeName="opacity" values="1;0.4;0.8;1" dur="2" repeatCount="indefinite"
            begin={{ $b }}>

        </animate>
    </circle>
</svg>
