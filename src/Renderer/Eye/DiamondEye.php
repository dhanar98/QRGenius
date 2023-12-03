<?php
declare(strict_types=1);

namespace BaconQrCode\Renderer\Eye;

use BaconQrCode\Renderer\Path\Path;

/**
 * Renders the eyes with a diamond shape and a smaller diamond inside.
 */
final class DiamondEye implements EyeInterface
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
            ->close()
            ;
    }

    public function getInternalPath(): Path
    {
        // Adjust the path to represent a smaller diamond inside
        return (new Path())
            ->move(0, 3)   // Top point
            ->line(3, 0)    // Right point
            ->line(0, 3)    // Bottom point
            ->line(-3, 0)   // Left point
            ->close()

            ->move(0, -2)   // Top point
            ->line(1.5, 0)    // Right point
            ->line(0, 2)    // Bottom point
            ->line(-1.5, 0)   // Left point
            ->close();
    }
}