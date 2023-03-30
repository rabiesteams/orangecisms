namespace Rabiesteams\Orangecisms;

use Illuminate\Support\ServiceProvider;
use Rabiesteams\Orangecisms\OrangeciSMS;
use Rabiesteams\Orangecisms\SMSInterface;

class OrangeSMSProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SMSInterface::class, function () {
            return new OrangeciSMS();
        });
    }

    public function boot()
    {
        // Configuration des routes
    }
}
