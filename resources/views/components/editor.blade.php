                
  <div class="ql-header-filled w-full">
    <div
      class="h-48"
      x-init="$el._x_quill = new Quill($el,{
          modules:{
              toolbar: [
                  ['bold', 'italic', 'underline', 'strike'],
                  ['blockquote', 'code-block'],
                  [{ header: [1, 2, 3, 4, 5, 6, false] }],
                  [{ color: [] }, { background: [] }],
                  ['clean'],
              ]
          },
          placeholder: 'Enter your content...',
          theme: 'snow',
      })"
    ></div>
  </div>