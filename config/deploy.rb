# config valid only for Capistrano 3.1
lock '3.2.1'

set :application, 'easyreactbook'
set :repo_url, 'git@github.com:wjgilmore/easy_react_book.git'

# Default branch is :master
# ask :branch, proc { `git rev-parse --abbrev-ref HEAD`.chomp }.call

# Default deploy_to directory is /var/www/my_app
set :deploy_to, '/home/wjgilmorecom/easyreactbook.com'

set :tmp_dir, '/home/wjgilmorecom/tmp'

# Default value for :scm is :git
set :scm, :git

# Default value for :format is :pretty
# set :format, :pretty

# Default value for :log_level is :debug
set :log_level, :debug

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
#set :linked_files, %w{config/database.php}

# Default value for linked_dirs is []
# set :linked_dirs, %w{bin log tmp/pids tmp/cache tmp/sockets vendor/bundle public/system}

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
set :keep_releases, 3

namespace :deploy do

  desc "Build"
  after :updated, :build do
      on roles(:app) do
          within release_path  do
            execute :composer, "install --no-dev --quiet" # install dependencies
            execute :chmod, "u+x artisan" # make artisan executable
            execute "ln -nfs #{shared_path}/.env #{release_path}/.env"
            #execute "rm #{release_path}/public/.htaccess"
            #execute "ln -nfs #{shared_path}/.htaccess #{release_path}/public/.htaccess"
            #execute :php, "artisan migrate --force" # run migrations
          end
      end
  end

  # after 'deploy:update_code', 'deploy:symlink_shared'

  # desc "Create symlinks"
  # task :symlink_shared do
  #   run "ln -nfs #{shared_path}/.env #{release_path}/.env"
  # end

  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      # Your restart mechanism here, for example:
      # execute :touch, release_path.join('tmp/restart.txt')
    end
  end

  after :publishing, :restart

  after :restart, :clear_cache do
    on roles(:web), in: :groups, limit: 3, wait: 10 do
      # Here we can do anything such as:
      # within release_path do
      #   execute :rake, 'cache:clear'
      # end
    end
  end

end
