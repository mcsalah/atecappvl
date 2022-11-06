pipeline {
    agent { label 'linux' }
    
   
    stages {
        stage('copy from git') {
            steps {
                 sh 'rm -rf atecappvl'
                 echo 'copy from github'
                 sh 'git clone https://github.com/mcsalah/atecappvl.git'
                 sh 'mv atecappvl atecappvl."${BUILD_ID}"'
                 sh 'cp -R atecappvl."${BUILD_ID}" /var/www/html'

                
            }
        }
        stage ('build image') {
            steps {
                  
             sh 'docker build -t atec.${BUILD_ID} .'
             sh 'docker images'   
            }
        }
        stage ('cleane previous image') {
            steps {
                  
             sh 'docker rmi atec.${BUILD_ID}-1'
               
            }
          }
        }   
    
}
