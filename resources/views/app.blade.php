<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Version</title>
</head>
<body>
<h1>Application Version</h1>

<div>
    {{-- Retrieve version from .env file --}}
    @include(config('version.badge_blade'), ['label' => 'Environment Version', 'version' => $envVersion])
</div>
<div>
    {{-- Retrieve version from composer.json --}}
    @include(config('version.badge_blade'), ['label' => 'Composer Version', 'version' => $composerVersion])
</div>
</body>
</html>
