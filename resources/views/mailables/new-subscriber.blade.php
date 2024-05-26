<x-email::newsletter
    :entity="$entity"
    :subject="$subject"
    :preview="$preview"
>
    <x-email::paragraph :entity="$entity">Hello!</x-email::paragraph>

    <x-email::paragraph :entity="$entity">Thank you for subscribing to <b>{{ $entity->name }}</b>!</x-email::paragraph>

    <x-email::button :entity="$entity">Your coucher code: PIONEER</x-email::button>

    <x-email::sub-line :entity="$entity">This voucher code will be active 48h after the course launch</x-email::sub-line>

</x-email::newsletter>
