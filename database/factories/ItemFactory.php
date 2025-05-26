<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $appNames = [
            'Recordatorios de Medicinas',
            'Ejercicios para Mayores',
            'Directorio Familiar Fácil',
            'Juegos Mentales Senior',
            'Lupa Digital Avanzada',
            'Agenda Médica Simple',
            'Conecta Nietos',
            'Recetas Adaptadas',
            'Seguridad en Casa',
            'Noticias Claras',
            'Control de Presión',
            'Entrenador de Memoria',
            'Contactos Grandes Letras',
            'Podómetro Amigable',
            'Listas de Supermercado Fácil',
        ];

        $spanishSentences = [
            'Ayuda a mantener un seguimiento preciso de las citas y tareas diarias.',
            'Simplifica la comunicación con familiares y amigos.',
            'Proporciona actividades estimulantes para la mente.',
            'Ofrece herramientas prácticas para la vida cotidiana.',
            'Diseñada para ser accesible y cómoda de usar.',
            'Facilita el acceso a información importante de manera sencilla.',
            'Ideal para quienes buscan independencia y apoyo tecnológico.',
            'Incluye funciones personalizables para adaptarse a diferentes necesidades.',
            'Una herramienta confiable para gestionar la salud y el bienestar.',
            'Permite organizar actividades y recordatorios importantes.',
        ];

        $fixedPhrase = 'Fácil de usar, con interfaz intuitiva y funciones útiles para el día a día.';

        return [
            'name' => Arr::random($appNames) . ' ' . $this->faker->unique()->randomNumber(3, true),
            'description' => Arr::random($spanishSentences) . ' ' . $fixedPhrase . ' ' . Arr::random($spanishSentences),
            'image_url' => strtoupper(substr(Arr::random($appNames), 0, 1)), // Usar la primera letra del nombre como marcador
            'price' => $this->faker->randomFloat(2, 0, 50), // Algunas apps pueden ser gratuitas o de bajo costo
            'stock' => $this->faker->numberBetween(0, 1000), // Stock no aplica realmente pero usamos el campo
            'release_date' => $this->faker->date(),
            'support_end_date' => $this->faker->date('Y-m-d', '+1 year'),
        ];
    }
}
