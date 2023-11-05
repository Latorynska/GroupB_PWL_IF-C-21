@props(['type'])

@php
    switch ($type) {
        case 'danger':
            $color = 'red';
            $iconClass = 'fas fa-exclamation-circle';
            break;
        case 'warning':
            $color = 'yellow';
            $iconClass = 'fas fa-exclamation-triangle';
            break;
        case 'success':
            $color = 'green';
            $iconClass = 'fas fa-check-circle';
            break;
        default:
            $color = 'gray'; // Default color for unknown type
            $iconClass = 'fas fa-question-circle'; // Default icon for unknown type
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => 'bg-'.$color.'-100 border border-'.$color.'-400 rounded-lg p-4 shadow-md']) }}>
    <!-- Card Content Goes Here -->
    <div class="flex items-center">
        <i class="{{ $iconClass }} text-2xl mr-2"></i>
        <h2 class="text-lg font-semibold text-{{ $color }}-800">Stock Information</h2>
    </div>
    <p>{{ $slot }}</p>
</div>
