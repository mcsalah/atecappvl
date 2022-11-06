pipeline {
    agent { label 'linux' }
    
   
    stages {
        stage('copy from git') {
            steps {
                 sh 'rm -rf atecappvl'
                 echo 'copy from github'
                 sh 'git clone https://github.com/mcsalah/atecappvl.git'
                 sh 'cp -R atecappvl /var/www/html'

                
            }
        }
        stage ('report') {
            steps {
                  
             echo ${BUILD_ID}
            }
        }   
    }
}
