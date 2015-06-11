role :app, %w{wjgilmorecom@www.wjgilmore.com}
role :web, %w{wjgilmorecom@www.wjgilmore.com}
role :db,  %w{wjgilmorecom@www.wjgilmore.com}

set :ssh_options, {
    forward_agent: true,
    auth_methods: %w(publickey),
    user: 'wjgilmorecom'
}
