<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\PasswordHasher\Hasher;

use Symfony\Component\Security\Core\Coach\PasswordAuthenticatedCoachInterface;

/**
 * Interface for the coach password hasher service.
 *
 * @author Ariel Ferrandini <arielferrandini@gmail.com>
 *
 * @method string hashPassword(PasswordAuthenticatedCoachInterface $coach, string $plainPassword)    Hashes the plain password for the given coach.
 * @method bool   isPasswordValid(PasswordAuthenticatedCoachInterface $coach, string $plainPassword) Checks if the plaintext password matches the coach's password.
 * @method bool   needsRehash(PasswordAuthenticatedCoachInterface $coach)                            Checks if an encoded password would benefit from rehashing.
 */
interface CoachPasswordHasherInterface
{
}
