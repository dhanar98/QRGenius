<?php

declare(strict_types=1);

namespace BaconQrCode\Renderer\Eye;

use BaconQrCode\Renderer\Path\Path;

/**
 * Renders the eyes in their default square shape.
 */
final class HamburgerEye implements EyeInterface
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
            ->close();
    }

    public function getInternalPath(): Path
    {

        $spacing = 0; // Adjust the spacing as needed

        return (new Path())
            // Draw the top row of squares
            ->move(-1.5, 1.5)
            ->line(-0.5, 1.5)
            ->line(-0.5, 0.5)
            ->line(-1.5, 0.5)
            ->close()

            ->move(-0.5 + $spacing, 1.5)
            ->line(0.5 + $spacing, 1.5)
            ->line(0.5 + $spacing, 0.5)
            ->line(-0.5 + $spacing, 0.5)
            ->close()

            ->move(0.5 + 2 * $spacing, 1.5)
            ->line(1.5 + 2 * $spacing, 1.5)
            ->line(1.5 + 2 * $spacing, 0.5)
            ->line(0.5 + 2 * $spacing, 0.5)
            ->close()

            // Draw the middle row of squares
            ->move(-1.5, 0.5)
            ->line(-0.5, 0.5)
            ->line(-0.5, -0.5)
            ->line(-1.5, -0.5)
            ->close()

            ->move(-0.5 + $spacing, 0.5)
            ->line(0.5 + $spacing, 0.5)
            ->line(0.5 + $spacing, -0.5)
            ->line(-0.5 + $spacing, -0.5)
            ->close()

            ->move(0.5 + 2 * $spacing, 0.5)
            ->line(1.5 + 2 * $spacing, 0.5)
            ->line(1.5 + 2 * $spacing, -0.5)
            ->line(0.5 + 2 * $spacing, -0.5)
            ->close()

            // Draw the bottom row of squares
            ->move(-1.5, -0.5)
            ->line(-0.5, -0.5)
            ->line(-0.5, -1.5)
            ->line(-1.5, -1.5)
            ->close()

            ->move(-0.5 + $spacing, -0.5)
            ->line(0.5 + $spacing, -0.5)
            ->line(0.5 + $spacing, -1.5)
            ->line(-0.5 + $spacing, -1.5)
            ->close()

            ->move(0.5 + 2 * $spacing, -0.5)
            ->line(1.5 + 2 * $spacing, -0.5)
            ->line(1.5 + 2 * $spacing, -1.5)
            ->line(0.5 + 2 * $spacing, -1.5)
            ->close();   


        //$spacing = 0.2; // Adjust the spacing as needed

        // return (new Path())
        //     // Draw the left column of squares
        //     ->move(-1.5, 1.5)
        //     ->line(-0.5, 1.5)
        //     ->line(-0.5, 0.5)
        //     ->line(-1.5, 0.5)
        //     ->close()

        //     ->move(-1.5, 0.5 + $spacing)
        //     ->line(-0.5, 0.5 + $spacing)
        //     ->line(-0.5, -0.5 + $spacing)
        //     ->line(-1.5, -0.5 + $spacing)
        //     ->close()

        //     ->move(-1.5, -0.5 + 2 * $spacing)
        //     ->line(-0.5, -0.5 + 2 * $spacing)
        //     ->line(-0.5, -1.5 + 2 * $spacing)
        //     ->line(-1.5, -1.5 + 2 * $spacing)
        //     ->close()

        //     // Draw the middle column of squares
        //     ->move(-0.5, 1.5)
        //     ->line(0.5, 1.5)
        //     ->line(0.5, 0.5)
        //     ->line(-0.5, 0.5)
        //     ->close()

        //     ->move(-0.5, 0.5 + $spacing)
        //     ->line(0.5, 0.5 + $spacing)
        //     ->line(0.5, -0.5 + $spacing)
        //     ->line(-0.5, -0.5 + $spacing)
        //     ->close()

        //     ->move(-0.5, -0.5 + 2 * $spacing)
        //     ->line(0.5, -0.5 + 2 * $spacing)
        //     ->line(0.5, -1.5 + 2 * $spacing)
        //     ->line(-0.5, -1.5 + 2 * $spacing)
        //     ->close()

        //     // Draw the right column of squares
        //     ->move(0.5, 1.5)
        //     ->line(1.5, 1.5)
        //     ->line(1.5, 0.5)
        //     ->line(0.5, 0.5)
        //     ->close()

        //     ->move(0.5, 0.5 + $spacing)
        //     ->line(1.5, 0.5 + $spacing)
        //     ->line(1.5, -0.5 + $spacing)
        //     ->line(0.5, -0.5 + $spacing)
        //     ->close()

        //     ->move(0.5, -0.5 + 2 * $spacing)
        //     ->line(1.5, -0.5 + 2 * $spacing)
        //     ->line(1.5, -1.5 + 2 * $spacing)
        //     ->line(0.5, -1.5 + 2 * $spacing)
        //     ->close();

    }
}
