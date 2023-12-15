<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts()
=======
    public function hosts(): array
>>>>>>> f3520ab17d4629c7c30742bb2f2ecd2b3537f1fe
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
