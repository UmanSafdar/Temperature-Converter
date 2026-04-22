<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #dbedfe; }
        .converter-card { max-width: 400px; margin-top: 100px; border: none; border-radius: 15px; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="card converter-card shadow-sm p-4">
        <h4 class="text-center fw-bold mb-4">Temperature Convert</h4>
        
        <form method="POST">
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold">Temperature</label>
                <div class="input-group">
                    <input type="number" step="any" name="temp" class="form-control form-control-lg" placeholder="0.00" required>
                    <span class="input-group-text">°</span>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label text-muted small fw-bold">Convert To</label>
                <select name="unit" class="form-select">
                    <option value="CtoF">Fahrenheit (°F)</option>
                    <option value="FtoC">Celsius (°C)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-dark w-100 py-2 fw-bold">Convert Now</button>
        </form>

        <div class="mt-4 text-center">
            </div>
    </div>
</div>

</body>
</html>