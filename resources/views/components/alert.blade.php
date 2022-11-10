@props(['on'])
<div x-data="{}" x-init="$wire.on('{{ $on }}', (e) => $notification(e))"></div>
