@section('title', 'Upload documents')
<x-master-layout>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Upload Documents
        </h2>

        @livewire('documents.upload-document')
    </div>
</x-master-layout>

