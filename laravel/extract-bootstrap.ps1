$cssPath = ".\public\nerox\assets\css\bootstrap.css"
$classPath = ".\bootstrap-used-classes.txt"
$outputPath = ".\bootstrap-used-rules.css"

$css = Get-Content $cssPath -Raw
$classes = Get-Content $classPath

$found = New-Object System.Collections.Generic.HashSet[string]

foreach ($class in $classes) {

    $escaped = [regex]::Escape($class)

    $pattern = "(?m)([^{}]*\.$escaped[^{}]*)\{([^{}]*)\}"

    $matches = [regex]::Matches($css, $pattern)

    foreach ($match in $matches) {

        $selector = $match.Groups[1].Value.Trim()
        $body = $match.Groups[2].Value.Trim()

        if ($selector -and $body) {

            $rule = "$selector`n{`n$body`n}"

            if ($found.Add($rule)) {
                Add-Content -Path $outputPath -Value $rule
                Add-Content -Path $outputPath -Value ""
            }
        }
    }
}

Write-Host "Archivo generado:"
Write-Host $outputPath
