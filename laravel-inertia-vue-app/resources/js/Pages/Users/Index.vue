<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

// Used to access Users Object from UsersController
defineProps({
  users: {
    type: Object,
  }
});
</script>

<template>
  <Head title="Users Index" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users Index</h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
          <div class="flex flex-col">
            <div class="overflow-x-auto -my-2 sm:-mx-6 lg:-mx-8">
              <div class="inline-block py-2 min-w-full align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">

                  <table class="min-w-full divide-y divide-gray-200 table-fixed">
                    <thead class="bg-indigo-500">
                      <tr>
                        <th scope="col" class="w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
                          <span class="inline-flex py-3 px-6 w-full justify-between" @click="sort('id')">
                            ID
                          </span>
                        </th>
                        <th scope="col" class="w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
                          <span class="inline-flex py-3 px-6 w-full justify-between" @click="sort('email')">
                            Email
                          </span>
                        </th>
                        <th scope="col" class="w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
                          <span class="inline-flex py-3 px-6 w-full justify-between" @click="sort('name')">
                            Name
                          </span>
                        </th>
                        <th scope="col" class="w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
                          <span class="inline-flex py-3 px-6 w-full justify-between">
                            Actions
                          </span>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <!-- Start looping the Users Object -->
                      <tr v-for="(user, index) in users" :key="user.id">
                        <td class="py-4 px-6 whitespace-nowrap">
                          {{ user.id }}
                        </td>
                        <td class="py-4 px-6 whitespace-nowrap">
                          {{ user.email }}
                        </td>
                        <td class="py-4 px-6 whitespace-nowrap">
                          {{ user.name }}
                        </td>
                        <td class="py-4 px-6 whitespace-nowrap">
                          <!-- Start Actions -->
                          <!-- Start Edit User -->
                          <inertia-link
                          <!-- Start Actions -->
                          :href="route('users.edit', { user: user.id })"
                          class="mr-1 mb-1 px-4 py-2 uppercase text-sm leading-4 border rounded-md hover:bg-white focus:border-indigo-500 focus:text-indigo-500"
                          >
                           Edit
                          </inertia-link>
                          <!-- End Edit User -->
                          <!-- End Actions -->


                          <!-- End Actions -->
                        </td>
                      </tr>
                      <!-- End looping the Users Object -->
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </AuthenticatedLayout>
</template>