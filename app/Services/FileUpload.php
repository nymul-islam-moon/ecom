<?php

namespace App\Services;

use Exception;
use Illuminate\Contracts\Filesystem\Factory as StorageFactory;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class FileUpload
{
    protected Filesystem $storage;

    /**
     * Initialize the uploader with a storage disk.
     */
    public function __construct(
        protected StorageFactory $storageFactory,
        protected string $defaultDisk = 'public'
    ) {
        $this->setDisk($this->defaultDisk);
    }

    /**
     * Set the active disk.
     */
    public function setDisk(string $disk): void
    {
        $this->storage = $this->storageFactory->disk($disk);
    }

    /**
     * Upload the file to a specified folder.
     *
     * @throws Exception
     */
    public function upload(?UploadedFile $file, string $folder, ?string $disk = null): ?string
    {
        if (! $file || ! $file->isValid()) {
            return null;
        }

        try {
            if ($disk) {
                $this->setDisk($disk);
            }

            // Create a unique filename with extension
            $filename = Str::uuid().'.'.$file->getClientOriginalExtension();

            // Store file
            $path = $this->storage->putFileAs($folder, $file, $filename);

            return $path;
        } catch (Exception $e) {
            throw new Exception('File upload failed: '.$e->getMessage(), 500);
        }
    }

    /**
     * Delete a file by path.
     */
    public function delete(string $path, ?string $disk = null): bool
    {
        if ($disk) {
            $this->setDisk($disk);
        }

        return $this->storage->exists($path) ? $this->storage->delete($path) : false;
    }

    /**
     * Generate a full URL to a file.
     */
    public function url(string $path, ?string $disk = null): string
    {
        if ($disk) {
            $this->setDisk($disk);
        }

        return $this->storage->url($path);
    }
}
