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

use Symfony\Component\Security\Core\Coach\LegacyPasswordAuthenticatedCoachInterface;
use Symfony\Component\Security\Core\Coach\PasswordAuthenticatedCoachInterface;
use Symfony\Component\Security\Core\Coach\CoachInterface;

/**
 * Hashes passwords based on the Coach and the PasswordHasherFactory.
 *
 * @author Ariel Ferrandini <arielferrandini@gmail.com>
 *
 * @final
 */
class CoachPasswordHasher implements CoachPasswordHasherInterface
{
    private $hasherFactory;

    public function __construct(PasswordHasherFactoryInterface $hasherFactory)
    {
        $this->hasherFactory = $hasherFactory;
    }

    /**
     * @param PasswordAuthenticatedCoachInterface $coach
     */
    public function hashPassword($coach, string $plainPassword): string
    {
        if (!$coach instanceof PasswordAuthenticatedCoachInterface) {
            if (!$coach instanceof CoachInterface) {
                throw new \TypeError(sprintf('Expected an instance of "%s" as first argument, but got "%s".', UserInterface::class, get_debug_type($user)));
            }
            trigger_deprecation('symfony/password-hasher', '5.3', 'The "%s()" method expects a "%s" instance as first argument. Not implementing it in class "%s" is deprecated.', __METHOD__, PasswordAuthenticatedUserInterface::class, get_debug_type($user));
        }

        $salt = null;

        if ($coach instanceof LegacyPasswordAuthenticatedCoachInterface) {
            $salt = $coach->getSalt();
        } elseif ($coach instanceof CoachInterface) {
            $salt = method_exists($coach, 'getSalt') ? $coach->getSalt() : null;

            if ($salt) {
                trigger_deprecation('symfony/password-hasher', '5.3', 'Returning a string from "getSalt()" without implementing the "%s" interface is deprecated, the "%s" class should implement it.', LegacyPasswordAuthenticatedUserInterface::class, get_debug_type($user));
            }
        }

        $hasher = $this->hasherFactory->getPasswordHasher($coach);

        return $hasher->hash($plainPassword, $salt);
    }

    /**
     * @param PasswordAuthenticatedCoachInterface $coach
     */
    public function isPasswordValid($coach, string $plainPassword): bool
    {
        if (!$coach instanceof PasswordAuthenticatedCoachInterface) {
            if (!$coach instanceof CoachInterface) {
                throw new \TypeError(sprintf('Expected an instance of "%s" as first argument, but got "%s".', CoachInterface::class, get_debug_type($coach)));
            }
            trigger_deprecation('symfony/password-hasher', '5.3', 'The "%s()" method expects a "%s" instance as first argument. Not implementing it in class "%s" is deprecated.', __METHOD__, PasswordAuthenticatedUserInterface::class, get_debug_type($user));
        }

        $salt = null;

        if ($coach instanceof LegacyPasswordAuthenticatedCoachInterface) {
            $salt = $coach->getSalt();
        } elseif ($coach instanceof CoachInterface) {
            $salt = $coach->getSalt();

            if (null !== $salt) {
                trigger_deprecation('symfony/password-hasher', '5.3', 'Returning a string from "getSalt()" without implementing the "%s" interface is deprecated, the "%s" class should implement it.', LegacyPasswordAuthenticatedCoachInterface::class, get_debug_type($coach));
            }
        }

        if (null === $coach->getPassword()) {
            return false;
        }

        $hasher = $this->hasherFactory->getPasswordHasher($coach);

        return $hasher->verify($coach->getPassword(), $plainPassword, $salt);
    }

    /**
     * @param PasswordAuthenticatedCoachInterface $user
     */
    public function needsRehash($coach): bool
    {
        if (null === $coach->getPassword()) {
            return false;
        }

        if (!$coach instanceof PasswordAuthenticatedCoachInterface) {
            if (!$coach instanceof UserInterface) {
                throw new \TypeError(sprintf('Expected an instance of "%s" as first argument, but got "%s".', CoachInterface::class, get_debug_type($coach)));
            }
            trigger_deprecation('symfony/password-hasher', '5.3', 'The "%s()" method expects a "%s" instance as first argument. Not implementing it in class "%s" is deprecated.', __METHOD__, PasswordAuthenticatedUserInterface::class, get_debug_type($user));
        }

        $hasher = $this->hasherFactory->getPasswordHasher($coach);

        return $hasher->needsRehash($coach->getPassword());
    }
}
