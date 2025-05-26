<!DOCTYPE html>
<html>
<head>
    <title>Detalle de {{ $item->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: sans-serif;
        }
        .detail-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .item-detail-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .item-details h1 {
            color: #0056b3;
            margin-bottom: 20px;
            font-size: 2rem;
        }
        .item-details p {
            color: #495057;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .back-link {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <a href="{{ route('items.index') }}" class="btn btn-secondary mb-4 back-link">Volver a la Lista de Aplicaciones</a>

        <div class="detail-container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $item->image_url }}" alt="{{ $item->name }}" class="item-detail-img">
                </div>
                <div class="col-md-8 item-details">
                    <h1>{{ $item->name }}</h1>
                    <p><strong>Descripción:</strong> {{ $item->description }}</p>
                    <p><strong>Precio:</strong> ${{ number_format($item->price, 2) }}</p>
                    <p><strong>Stock:</strong> {{ $item->stock }}</p>
                    <p><strong>Fecha de Lanzamiento:</strong> {{ $item->release_date }}</p>
                    <p><strong>Fin de Soporte Estimado:</strong> {{ $item->support_end_date }}</p>
                    {{-- Agrega aquí los otros atributos del ítem si los tienes --}}
                </div>
            </div>
        </div>
    </div>
</body>
</html> 