<div id="filter-form-container"></div>
<table class="table mb-0 table-borderless adv-table adv-data-table" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
   <thead>
      <tr class="userDatatable-header">
         <th>
            <span class="userDatatable-title">id</span>
         </th>
         <th>
            <span class="userDatatable-title">Department Name</span>
         </th>
         <th>
            <span class="userDatatable-title">Ministry</span>
         </th>
         <th>
            <span class="userDatatable-title float-right">action</span>
         </th>
      </tr>
   </thead>
   <tbody>
      @foreach ($basicInfos as $key => $basicInfo)
      <tr>
         <td>
            {{ $key + 1 }}
         </td>
         <td>
            <div class="userDatatable-content">
               {{ $basicInfo->name }}
            </div>
         </td>
         <td>
            <div class="userDatatable-content">
               {{ $basicInfo->ministry->name }}
            </div>
         </td>
         <td>
            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
               <li>
                  <a href="{{ route('ministry.edit', $basicInfo->id) }}" class="edit">
                  <span data-feather="edit"></span></a>
               </li>
               <li>
                  <a href="{{ route('ministry.delete', $basicInfo->id) }}"
                     onclick="return confirm('Do you want to delete this information {{$basicInfo->name }} ?');" class="remove">
                  <span data-feather="trash-2"></span></a>
               </li>
            </ul>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>