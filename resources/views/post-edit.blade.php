@extends('layouts.dashboard')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- cards row 1 -->
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6 class="text-center">Post edit</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <div class="flex-auto px-6 pb-6">
              <form role="form text-left" action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
                <div class="mb-4">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{ old('title', $post->title) }}" aria-describedby="title-addon" />
                    @error('title')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="subtitle">Description</label>
                    <input type="text" name="subtitle" id="subtitle" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{ old('subtitle', $post->subtitle) }}" aria-describedby="subtitle-addon" />
                    @error('subtitle')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                        <option @if (old('status', $post->status) === 'publish') selected @endif value="publish">Publish</option>
                        <option @if (old('status', $post->status) === 'draft') selected @endif value="draft">Draft</option>
                    </select>
                    @error('status')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="description">Content</label>
                    <textarea name="description" id="description" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" rows="4">{{ old('description', $post->description) }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" accept="image/*" />
                    @error('image')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                    @enderror
                </div>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('posts') }}" class="inline-block w-1/2 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-red-900 to-red-500 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Cancel</a>
                    <button type="submit" class="inline-block w-1/2 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-custom to-gray-custom hover:border-slate-700 hover:bg-slate-700 hover:text-white">Update</button>
                </div>              
              </form>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection