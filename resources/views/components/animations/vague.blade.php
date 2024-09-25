<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Calque_1" x="0px"
    y="0px" viewBox="0 0 1300 {{ $height }}" style="enable-background:new 0 0 1300 {{ $height }};"
    xml:space="preserve">
    <style type="text/css">
        .st1 {
            opacity: 0.4;
            fill: {{ $fillColor }};
            enable-background: new;
            height: 160%;
        }
    </style>

    <path class="st1"
        d="M 0 {{ $startY }} C 600 {{ $controlY1 }} 650 {{ $controlY2 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }}">
        <animate attributeName="d" dur="5s" begin="1s"
            values="M 0 {{ $startY }} C 600 {{ $controlY1 }} 650 {{ $controlY2 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }};
                M 0 {{ $startY }} C 600 {{ $controlY2 }} 650 {{ $controlY1 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }};
                M 0 {{ $startY }} C 600 {{ $controlY1 }} 650 {{ $controlY2 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }}"
            repeatCount="indefinite" />
    </path>

    <path class="st1"
        d="M 0 {{ $startY }} C 600 {{ $controlY2 }} 650 {{ $controlY1 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }}">
        <animate attributeName="d" dur="5s"
            values="M 0 {{ $startY }} C 600 {{ $controlY2 }} 650 {{ $controlY1 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }};
                M 0 {{ $startY }} C 600 {{ $controlY1 }} 650 {{ $controlY2 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }};
                M 0 {{ $startY }} C 600 {{ $controlY2 }} 650 {{ $controlY1 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }}"
            repeatCount="indefinite" />
    </path>

    <path class="st1"
        d="M 0 {{ $startY }} C 950 {{ $controlY3 }} 950 {{ $controlY4 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }}">
        <animate attributeName="d" dur="5s" begin="2s"
            values="M 0 {{ $startY }} C 950 {{ $controlY3 }} 950 {{ $controlY4 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }};
                M 0 {{ $startY }} C 350 {{ $controlY4 }} 350 {{ $controlY3 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }};
                M 0 {{ $startY }} C 950 {{ $controlY3 }} 950 {{ $controlY4 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }}"
            repeatCount="indefinite" />
    </path>

    <path class="st1"
        d="M 0 {{ $startY }} C 350 {{ $controlY4 }} 350 {{ $controlY3 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }}">
        <animate attributeName="d" dur="5s"
            values="M 0 {{ $startY }} C 350 {{ $controlY4 }} 350 {{ $controlY3 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }};
                M 0 {{ $startY }} C 950 {{ $controlY3 }} 950 {{ $controlY4 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }};
                M 0 {{ $startY }} C 350 {{ $controlY4 }} 350 {{ $controlY3 }} 1300 {{ $startY }} L 1300 {{ $endY }} L 0 {{ $endY }} L 0 {{ $startY }}"
            repeatCount="indefinite" />
    </path>
</svg>
