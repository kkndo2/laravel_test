@servers(['web' => 'localhost'])

@setup
include('envoy.setup.php');
@endsetup

@task('deploy')
    @if($install)
        mysql -uroot -p{{ $db_root_pass }} -e "{{ $sql }}";

        echo "{{ $username }} / {{ $pass }}";
    @endif
    pwd;
@endtask
