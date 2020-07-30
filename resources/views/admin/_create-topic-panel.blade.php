            <div class="container">
                <form action="create-new-topic" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="block">
                        <label for="topicName" class="text-gray-700">
                            議題：
                        </label>
                        <input type="text" class="shadow w-10/12 py-2 mb-3 leading-tight rounded">
                    </div>

                    <div class="block">
                        <label for="topicName" class="text-gray-700">
                            分類：
                        </label>
                        <input type="text" class="shadow w-10/12 py-2 mb-3 leading-tight rounded">
                    </div>

                    <div class="block">
                        <label for="topicName" class="text-gray-700">
                            写真：
                        </label>
                        <input type="file" class="shadow py-2 px-2 mb-3 leading-tight rounded">
                    </div>

                    <h2 class="text-gray-500 text-4xl mt-2">意見１</h2>
                    <div class="mb-4">
                        <div class="block">
                            <label for="" class="text-gray-700 block mt-4 mb-2">賛成：</label>
                            <textarea class="resize shadow" name="" id="" cols="130" rows="20"></textarea>
                        </div>
                        <div class="block">
                            <label for="" class="text-gray-700 block mt-4 mb-2">反対：</label>
                            <textarea class="resize shadow" name="" id="" cols="130" rows="20"></textarea>
                        </div>
                    </div>

                    <h2 class="text-gray-500 text-4xl mt-2">意見２</h2>
                    <div class="mb-4">
                        <div class="block">
                            <label for="" class="text-gray-700 block mt-4 mb-2">賛成：</label>
                            <textarea class="resize shadow" name="" id="" cols="130" rows="20"></textarea>
                        </div>
                        <div class="block">
                            <label for="" class="textgray-700 block mt-4 mb-2">反対：</label>
                            <textarea class="resize shadow" name="" id="" cols="130" rows="20"></textarea>
                        </div>
                    </div>

                    <h2 class="text-gray-500 text-4xl mt-2">意見３</h2>
                    <div class="mb-4">
                        <div class="block">
                            <label for="" class="text-gray-700 block mt-4 mb-2">賛成：</label>
                            <textarea class="resize shadow" name="" id="" cols="130" rows="20"></textarea>
                        </div>
                        <div class="block">
                            <label for="" class="text-gray-700 block mt-4 mb-2">反対：</label>
                            <textarea class="resize shadow" name="" id="" cols="130" rows="20"></textarea>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="text-center mb-4">
                            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        保存する
                        </div>
                    </button>
                    </div>
                </form>
            </div>