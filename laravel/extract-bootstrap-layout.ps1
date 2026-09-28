$cssPath = ".\public\nerox\assets\css\bootstrap.css"
$classPath = ".\bootstrap-layout-classes.txt"
$outputPath = ".\bootstrap-layout-rules.css"

$css = Get-Content $cssPath -Raw
$classes = Get-Content $classPath

$results = New-Object System.Collections.Generic.HashSet[string]

foreach ($class in $classes) {

    $escaped = [regex]::Escape($class)

    # Busca reglas CSS que contengan la clase.
    # No intenta reconstruir @media todavía.
    $pattern = "(?s)([^{}]*\.$escaped[^{}]*)\{([^{}]*)\}"

    foreach ($match in [regex]::Matches($css, $pattern)) {

        $selector = $match.Groups[1].Value.Trim()
        $body = $match.Groups[2].Value.Trim()

        if ($selector -and $body) {

            $rule = "$selector`n{$body`n}"

            if ($results.Add($rule)) {
                Add-Content $outputPath $rule
                Add-Content $outputPath ""
            }
        }
    }
}

Write-Host ""
Write-Host "Generado:"
Write-Host $outputPath
Write-Host ""
Write-Host "Reglas encontradas:" $results.Count
