<?php

declare(strict_types=1);

namespace Liberu\Foundation\AuditFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected static string $view = 'audit-filament::overview';
    protected static ?string $title = 'Audit';
}

