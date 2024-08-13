<div class="form__group-content">
    <button class="form__modal-button" type="button" wire:click="openModal()">
        選択してください
    </button>
    @if($showModal)
    <div class="form__select--category">
        <ul>
            @foreach($categories as $category)
            <li>
                <label>
                    <input type="checkbox" name="category[]" value="{{ $category->id }}">
                    {{ $category->name }}
                </label>
            </li>
            @endforeach
        </ul>
        <div class="">
            <button class="close-button" type="button" wire:click="closeModal()">
                閉じる
            </button>
        </div>
    </div>
    @endif
</div>