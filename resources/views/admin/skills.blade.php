@extends('admin.layouts.app')

@section('content')
    <script>
        var deleteUrl = '';
    </script>
    <style>

        table.blueTable {
            border: 1px solid #1C6EA4;
            background-color: #EEEEEE;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        table.blueTable td, table.blueTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }
        table.blueTable tbody td {
            font-size: 25px;
            padding-left: 20px;
            padding-right: 10px;
        }
        table.blueTable tr:nth-child(even) {
            background: #D0E4F5;
        }
        table.blueTable thead {
            background: #1C6EA4;
            background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            border-bottom: 2px solid #444444;
        }
        table.blueTable thead th {
            font-size: 15px;
            font-weight: bold;
            color: #FFFFFF;
            border-left: 2px solid #D0E4F5;
        }
        table.blueTable thead th:first-child {
            border-left: none;
        }

        table.blueTable tfoot {
            font-size: 14px;
            font-weight: bold;
            color: #FFFFFF;
            background: #D0E4F5;
            background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            border-top: 2px solid #444444;
        }
        table.blueTable tfoot td {
            font-size: 14px;
        }
        table.blueTable tfoot .links {
            text-align: right;
        }
        table.blueTable tfoot .links a{
            display: inline-block;
            background: #1C6EA4;
            color: #FFFFFF;
            padding: 2px 8px;
            border-radius: 5px;
        }

        .sub-skills-table {
            display: none;
            background: white;
            width: 100%;
        }

        .clickable {
            cursor: pointer;
        }
    </style>
    <div class="container fixed-to-890">
        <a href="#" class="btn btn-info" style="margin: 20px 0 0px 0" data-toggle="modal" data-target="#skills">ajouter une nouvelle compétence</a>
        <div class="row table-scroll mar-t-m">
            <div class="col-md-12">

                <table class="blueTable">
                    <?php $i = 1; ?>
                    @foreach($skill_categories as $cat)
                    <tr>
                        <td>
                            <div class="clickable">{{ $i }}. {{ $cat->title }}</div>
                            <table class="sub-skills-table">
                                <?php $j = 1; ?>
                                @foreach($cat->skills as $skill)
                                <tr>
                                    <td style="font-size: 15px">{{ $j }}. {{ $skill->title }}</td>
                                    <td align="right" valign="top">
                                        <a href="/admin/skills/editSkill/{{$skill->id}}" class=" icon-c-ed"></a>
                                        <a data-toggle="modal"
                                           class="icon-c-del"
                                           data-target="#deleteSkill"
                                           onclick="deleteUrl = '/admin/skills/deleteSkill/{{$skill->id}}'"></a>
                                    </td>
                                </tr>
                                        <?php $j++; ?>
                                    @endforeach
                            </table>

                        </td>
                        <td align="right" valign="top">
                            <a href="/admin/skills/editSkillsCat/{{$cat->id}}" class=" icon-c-ed"></a>
                            <a data-toggle="modal"
                               class="icon-c-del"
                               data-target="#deleteSkill"
                               onclick="deleteUrl = '/admin/skills/deleteSkillsCat/{{$cat->id}}'"></a>
                        </td>
                    </tr>
                            <?php $i++; ?>
                   @endforeach
                </table>
            </div>
        </div>
    </div>
    <?php
        $skillsCategories = $skill_categories;
    ?>

    @include('admin.modals.delete-skill')
    @include('modals.skills-modal')
    @include('message')
@endsection
