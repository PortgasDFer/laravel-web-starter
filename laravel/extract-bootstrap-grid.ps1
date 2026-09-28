$cssPath = ".\public\nerox\assets\css\bootstrap.css"
$outputPath = ".\bootstrap-grid-needed.css"

$css = Get-Content $cssPath -Raw

$needed = @(
    "col-6",
    "col-12",
    "col-sm-6",
    "col-md-3",
    "col-md-6",
    "col-lg-2",
    "col-lg-3",
    "col-lg-4",
    "col-lg-5",
    "col-lg-6",
    "col-lg-7",
    "col-lg-8",
    "col-lg-10",
    "col-lg-12",
    "col-xl-2",
    "col-xl-3",
    "col-xl-4",
    "col-xl-5",
    "col-xl-6",
    "col-xl-7",
    "col-xl-8",
    "col-xl-9",
    "col-xl-10",
    "col-xl-12",
    "col-xxl-3",
    "col-xxl-4",
    "col-xxl-6",
    "col-xxl-7",
    "col-xxl-12"
)

$escaped = $needed | ForEach-Object {
    [regex]::Escape($_)
}

$pattern = '(?m)^\s*\.(' + ($escaped -join '|') + ')\s*\{[^}]*\}'

$matches = [regex]::Matches($css, $pattern)

Set-Content $outputPath "/* Bootstrap grid utilizado por el frontend público */"
Add-Content $outputPath ""

foreach ($match in $matches) {
    Add-Content $outputPath $match.Value.Trim()
    Add-Content $outputPath ""
}

Write-Host "Archivo generado:"
Write-Host $outputPath
Write-Host "Reglas encontradas:" $matches.Count
