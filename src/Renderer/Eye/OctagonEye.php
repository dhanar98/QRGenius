<?php

declare(strict_types=1);

namespace BaconQrCode\Renderer\Eye;

use BaconQrCode\Renderer\Path\Path;

/**
 * Renders the eyes with a feathered shape.
 */
final class OctagonEye implements EyeInterface
{
    /**
     * @var self|null
     */
    private static $instance;

    private function __construct()
    {
    }

    public static function instance(): self
    {
        return self::$instance ?: self::$instance = new self();
    }

    public function getExternalPath(): Path
    {
        // Adjust the path to represent the external shape of a diamond
        return (new Path())
            ->move(-3.5, -3.5)
            ->line(3.5, -3.5)
            ->line(3.5, 3.5)
            ->line(-3.5, 3.5)
            ->close()
            ->move(-2.5, -2.5)
            ->line(-2.5, 2.5)
            ->line(2.5, 2.5)
            ->line(2.5, -2.5)
            ->close();
    }

    public function getInternalPath(): Path
    {
        $sideLength = 1.5;
        $angle = 45;
    
        $path = new Path();
    
        for ($i = 0; $i < 10; $i++) {
            $x = $sideLength * cos(deg2rad($angle * $i));
            $y = $sideLength * sin(deg2rad($angle * $i));
    
            if ($i === 0) {
                $path = $path->move($x, $y); // Move to the first point
            } else {
                $path = $path->line($x, $y); // Draw a line to the next point
            }
        }
        
    
        $path = $path->close(); // Connect the last point to the starting point to close the pentagon
    
        return $path;
    }
}
