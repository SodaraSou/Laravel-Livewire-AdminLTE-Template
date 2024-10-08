@props(['id'])

<button class="btn btn-danger" wire:click="$dispatch('alert-delete', {id: {{ $id }}})">Delete</button>
