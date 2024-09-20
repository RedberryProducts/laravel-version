@php
    $id = uniqid();

    // Approximate character width in the font used
    $charWidth = 8;

    // Calculate the width for the label and version text (with some padding)
    $labelWidth = strlen($label) * $charWidth + 20;
    $versionWidth = strlen($version) * $charWidth + 20;

    // Total width of the SVG
    $totalWidth = $labelWidth + $versionWidth;
@endphp

<svg xmlns="http://www.w3.org/2000/svg" height="30" width="{{$totalWidth}}" role="img" aria-label="version">
    <linearGradient id="gradient-{{$id}}" x2="0" y2="100%">
        <stop offset="0%" stop-color="#4CAF50"/>
        <stop offset="100%" stop-color="#8BC34A"/>
    </linearGradient>
    <rect width="{{$labelWidth}}" height="30" fill="#555" rx="3"/>
    <rect x="{{$labelWidth}}" width="{{$versionWidth}}" height="30" fill="url(#gradient-{{$id}})" rx="3"/>
    <g fill="#fff" text-anchor="middle" font-family="Verdana" font-size="14">
        <text x="{{$labelWidth / 2}}" y="20" fill="#fff">{{$label}}</text>
        <text x="{{$labelWidth + ($versionWidth / 2)}}" y="20" fill="#fff">{{$version}}</text>
    </g>
</svg>
