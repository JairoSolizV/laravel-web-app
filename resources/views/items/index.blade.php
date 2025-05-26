<!DOCTYPE html>
<html>
<head>
    <title>Lista de Aplicaciones para Ancianos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: sans-serif;
        }
        .item-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            text-align: center;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .item-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .item-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .item-card h3 {
            color: #0056b3;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }
        .item-card p {
            color: #495057;
            font-size: 1rem;
        }
        .item-card a {
            text-decoration: none;
            color: inherit; /* Inherit text color */
        }
        h1 {
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Aplicaciones Móviles para Ancianos</h1>
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="item-card">
                        <a href="{{ route('items.show', $item) }}">
                            <img src="{{ $item->image_url }}" alt="{{ $item->name }}">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ Str::limit($item->description, 120) }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html> 